<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Service;
use App\model\Supports;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Support extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status',1)->get();
        $data['support_info'] = Supports::all();
        return view('vantage.pages.admin.support.show',$data);
    }
    public function add(){
        $data['company'] = Company::all();
        return view('vantage.pages.admin.support.add',$data);
    }
    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('support/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $tmp=Supports::orderBy('position','desc')->get();
            $p = new Supports();
            $p->name = $request->input('name');
            $p->type = $request->input('type');
            $p->link = '';
            $p->position = $tmp[0]->id+1;
            $p->details = $request->input('description');
            $p->created_at = date('Y-m-d');
            $p->save();

            return redirect('support/show');
        }
    }

    public function delete($id)
    {
        DB::table('support')->where('id', '=', $id)->delete();
        return redirect('support/show');
    }
    public function edit($id){
        $data['company'] = Company::all();
        $data['support'] = Supports::where('id',$id)->get();
        return view('vantage.pages.admin.support.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('support/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['name'] = $request->input('name');
            $p['details'] = $request->input('description');

            Supports::where('id',$id)->update($p);

            return redirect('support/show');
        }
    }
}
