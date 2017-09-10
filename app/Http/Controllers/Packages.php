<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Package;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Packages extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status',1)->get();
        $data['package_info'] = Package::all();
        return view('vantage.pages.admin.package.show',$data);
    }
    public function add(){
        $data['company'] = Company::all();
        return view('vantage.pages.admin.package.add',$data);
    }
    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('package/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Package();
            $p->name = $request->input('name');
            $p->subject = $request->input('shortNote');
            $p->details = $request->input('description');
            $p->created_at = date('Y-m-d');
            $p->save();

            return redirect('package/show');
        }
    }   
    public function delete($id)
    {
        DB::table('package')->where('id', '=', $id)->delete();
        return redirect('package/show');
    }
    public function edit($id){
        $data['company'] = Company::all();
        $data['packages'] = Package::where('id',$id)->get();
        return view('vantage.pages.admin.package.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('package/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['name'] = $request->input('name');
            $p['subject'] = $request->input('shortNote');
            $p['details'] = $request->input('description');

            Package::where('id',$id)->update($p);

            return redirect('package/show');
        }
    }
}
