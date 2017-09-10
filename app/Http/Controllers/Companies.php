<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\Address;
use App\model\Employee;
use App\model\About_info;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Companies extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();                
        return view('vantage.pages.admin.company.show',$data);
    }
    public function add(){
        $data['company'] = Company::all();
        return view('vantage.pages.admin.doctor.add',$data);
    }
    public function add_post(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'phn' => 'required',
            'profession' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'office' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('doctor/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Employee();
            $p->name = $request->input('name');
            $p->profession = $request->input('profession');
            $p->designation= $request->input('designation');
            $p->address = $request->input('address');
            $p->image = '';
            $p->contact = $request->input('phn');
            $p->fb = $request->input('fb');
            $p->mail = $request->input('email');
            $p->twitter = $request->input('twitter');
            $p->youtube = $request->input('youtube');
            $p->linkedin = $request->input('linkedin');
            $p->googolePlus = $request->input('google');
            $p->office = $request->input('office');
            $p->details = '';
            $p->created_at = date('Y-m-d');
            $p->save();

            $imageName = 'emp_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/emp/'), $imageName);

            Employee::where('id', $p->id)->update(['image' => $imageName]);

            return redirect('doctor/show');
        }
    }   
    public function delete($id)
    {
        DB::table('employee')->where('id', '=', $id)->delete();
        return redirect('doctor/show');
    }
    
    public function edit(){
        $data['company'] = Company::all();
        $data['companyAdd'] = Address::all();
        return view('vantage.pages.admin.company.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $isImg=$request->input('isImg');
        if($isImg==0){
            $validator = Validator::make($request->all(), [
                'phn' => 'required',
                //'address' => 'required',
                'email' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
                'phn' => 'required',
                //'address' => 'required',
                'email' => 'required',
            ]);
        }

        if ($validator->fails()) {
            return redirect('company/edit')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            //$p['name'] = $request->input('name');
            //$p['address'] = $request->input('address');
            $p['contact'] = $request->input('phn');
            $p['facebookLink'] = $request->input('fb');
            $p['mailAddress'] = $request->input('email');
            $p['twitterLink'] = $request->input('twitter');
            $p['youtubeLink'] = $request->input('youtube');
            $p['linkedinLink'] = $request->input('linkedin');
            $p['googlePlusLink'] = $request->input('google');
            $p['website'] = $request->input('website');
            //$p['office'] = $request->input('office');
            Company::where('id', $id)->update($p);

            if($isImg==1){
                $imageName = 'logo.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/'), $imageName);
                Company::where('id', $id)->update(['logo' => $imageName]);
                Company::where('id', $id)->update(['favIcon' => $imageName]);
            }
            return redirect('home/dashboard');
        }
    }
	
	public function about_us_edit(){
		$data['company'] = Company::all();
        $data['about_us_info'] = About_info::where('type',1)->get();
        return view('vantage.pages.admin.company.about_us_edit',$data);
	}
	public function about_us_edit_post(Request $request){
		$id=$request->input('id');
        $validator = Validator::make($request->all(), [            
            'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('about_us/edit/'.$id)
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {            
            $p['subject'] = $request->input('shortNote');
            $p['details'] = $request->input('description');

            About_info::where('id',$id)->update($p);

            return redirect('home/dashboard');
        }
	}
}
