<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Employee;
use App\model\Address;
use App\model\Logins;
use App\model\Supports;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class Employees extends Controller
{
	public function add_client(){
	$data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
		
        return view('vantage.pages.home.add_client',$data);
	}
	public function check_email(Request $request){
		$email=$request->input('emails');
		$p=Employee::where('mail',$email)->get();
		$res=sizeof($p);
		
		return $res;
	}
	public function add_post_client(Request $request){
	    $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'phn' => 'required',
            'profession' => 'required',            
            'address' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('Emroll')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Employee();
            $p->name = $request->input('name');
            $p->profession = $request->input('profession');
            $p->designation= '';
            $p->address = $request->input('address');
            $p->image = '';
            $p->contact = $request->input('phn');
            $p->fb = '';
			$p->type = 3;
            $p->mail = $request->input('email');
            $p->twitter = '';
            $p->youtube = '';
            $p->linkedin = '';
            $p->googolePlus = '';
            $p->office = '';
            $p->details = '';
			$p->status = 2;
            $p->created_at = date('Y-m-d');
            $p->save();

            $l=new Logins();
            $l->emp_id=$p->id;
            $l->type=1;
            $l->email=$request->input('email');
            $l->password=md5($request->input('pass'));
            $l->temp_password='';
            $l->status='0';
            $l->created_at = date('Y-m-d');
            $l->save();

            $imageName = 'emp_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/emp/'), $imageName);

            Employee::where('id', $p->id)->update(['image' => $imageName]);

             return Redirect::to('Enroll')->with('message', 'Request Send');
        }
	}
	
	public function show_client(){
		$data['company'] = Company::all();
        
        $data['client_pending'] = Employee::where('type',3)->where('status', 2)->orderBy('id','desc')->get();
		$data['client_active'] = Employee::where('type',3)->where('status', 1)->orderBy('id','desc')->get();
		$data['client_blocked'] = Employee::where('type',3)->where('status', 0)->orderBy('id','desc')->get();
		
        return view('vantage.pages.admin.client.show',$data);
	}
	
	public function status_change($val,$id){
		$data['status']=$val;
		Employee::where('id',$id)->update($data);

        if($val==1){
            $data2['status']=1;
        }else{
            $data2['status']=0;
        }
        Logins::where('emp_id',$id)->update($data2);

		return redirect('client/show');
	}
	
    public function show()
    {
        $data['company'] = Company::all();
        //$data['condition'] = ConditionTable::where('status',1)->get();
        $data['doctor_info'] = Employee::where('type',2)->get();
        return view('vantage.pages.admin.doctor.show',$data);
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
			$p->type = 2;
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

            $l=new Logins();
            $l->emp_id=$p->id;
            $l->type=2;
            $l->email=$request->input('email');
            $l->password=md5($request->input('pass'));
            $l->temp_password='';
            $l->created_at = date('Y-m-d');
            $l->save();

            return redirect('doctor/show');
        }
    }   
    public function delete($id)
    {
        DB::table('employee')->where('id', '=', $id)->delete();
        return redirect('doctor/show');
    }
    public function edit($id){
        $data['company'] = Company::all();
        $data['doctor'] = Employee::where('id',$id)->get();
        return view('vantage.pages.admin.doctor.edit',$data);
    }
    public function edit_post(Request $request){
        $id=$request->input('id');
        $isImg=$request->input('isImg');
        if($isImg==0){
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phn' => 'required',
                'profession' => 'required',
                'designation' => 'required',
                'address' => 'required',
                'office' => 'required',
                'email' => 'required',
            ]);
        }else{
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
        }

        if ($validator->fails()) {
            return redirect('doctor/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['name'] = $request->input('name');
            $p['profession'] = $request->input('profession');
            $p['designation']= $request->input('designation');
            $p['address'] = $request->input('address');
            $p['contact'] = $request->input('phn');
            $p['fb'] = $request->input('fb');
            $p['mail'] = $request->input('email');
            $p['twitter'] = $request->input('twitter');
            $p['youtube'] = $request->input('youtube');
            $p['linkedin'] = $request->input('linkedin');
            $p['googolePlus'] = $request->input('google');
            $p['office'] = $request->input('office');
            Employee::where('id', $id)->update($p);

            if($isImg==1){
                $imageName = 'emp_' . $id . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/emp/'), $imageName);
                Employee::where('id', $id)->update(['image' => $imageName]);
            }
            return redirect('doctor/show');
        }
    }
    
    public function edit_post_client(Request $request){
        $id=$request->input('id');
        $isIMG=$request->input('is_img');
        if($isIMG==0){
            $validator = Validator::make($request->all(), [
            //'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'phn' => 'required',
            'profession' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);
        }else{
            $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'phn' => 'required',
            'profession' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]);
        }
        
        if ($validator->fails()) {
            return redirect('myAccount/profile')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['name'] = $request->input('name');
            $p['profession'] = $request->input('profession');
            $p['address'] = $request->input('address');
            $p['contact'] = $request->input('phn');
            //$p->mail = $request->input('email');
            Employee::where('id', $id)->update($p);

             if($isIMG==1){
                 $imageName = 'emp_' . $id . '.' . $request->image->getClientOriginalExtension();
                 $request->image->move(public_path('images/emp/'), $imageName);

                 Employee::where('id', $id)->update(['image' => $imageName]);
             }
            return Redirect::to('myAccount/show')->with('message', 'Request Send');
        }
    }
    public function edit_post_doc(Request $request){
        $id=$request->input('id');
        $isIMG=$request->input('is_img');
        if($isIMG==0){
            $validator = Validator::make($request->all(), [
               //'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
               'name' => 'required',
               'phn' => 'required',
               'profession' => 'required',
               'address' => 'required',
               'email' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required',
            'phn' => 'required',
            'profession' => 'required',
            'address' => 'required',
            'email' => 'required',
            ]);
        }
        if ($validator->fails()) {
            return redirect('my_account/profile')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {            
            $p['name'] = $request->input('name');
            $p['profession'] = $request->input('profession');            
            $p['address'] = $request->input('address');
            $p['contact'] = $request->input('phn');
            //$p->mail = $request->input('email');
            Employee::where('id', $id)->update($p);
            if($isIMG==1){
               $imageName = 'emp_' . $id . '.' . $request->image->getClientOriginalExtension();
               $request->image->move(public_path('images/emp/'), $imageName);

               Employee::where('id', $id)->update(['image' => $imageName]);
            }
            return Redirect::to('my_account/show')->with('message', 'Request Send');
        }
    }

    public function update_pass(Request $request){
        $value = Session::all();
        $p['password'] = md5($request->input('new_pass'));
        Logins::where('id', $value['login_id'])->update($p);

        $tmp=Employee::where('id',$value['emp_id'])->get();
        //echo '<pre>';  print_r($tmp); die();

        if($tmp[0]['type']==1){
        return Redirect('home/dashboard');          
        }elseif($tmp[0]['type']==2){
        return Redirect('my_account/show');          
        }elseif($tmp[0]['type']==3){
        return Redirect('myAccount/show');          
        }        
    }
    
}
