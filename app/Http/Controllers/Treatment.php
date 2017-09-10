<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Treatments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Treatment extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status',1)->get();
        $data['treatment_info'] = Treatments::all();
        return view('vantage.pages.admin.treatment.show',$data);
    }
    public function add(){
        $data['company'] = Company::all();
        return view('vantage.pages.admin.treatment.add',$data);
    }
    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('treatment/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Treatments();
            $p->name = $request->input('name');
            $p->subject = $request->input('shortNote');
            $p->details = $request->input('description');
           // $p->image = '';
            $p->created_at = date('Y-m-d');
            $p->save();

            return redirect('treatment/show');
        }
    }   
    public function delete($id)
    {
        DB::table('treatment')->where('id', '=', $id)->delete();
        return redirect('treatment/show');
    }
    public function edit($id){
        $data['company'] = Company::all();
        $data['treatments'] = Treatments::where('id',$id)->get();
        return view('vantage.pages.admin.treatment.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('treatment/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['name'] = $request->input('name');
            $p['subject'] = $request->input('shortNote');
            $p['details'] = $request->input('description');

            Treatments::where('id',$id)->update($p);

            return redirect('treatment/show');
        }
    }
}
