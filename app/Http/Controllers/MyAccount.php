<?php

namespace App\Http\Controllers;

use App\model\About_info;
use App\model\All_pics;
use App\model\Company;
use App\model\Address;
use App\model\GalleryCat;
use App\model\Logins;
use App\model\Package;
use App\model\Employee;
use App\model\Service;
use App\model\Sms_list;
use App\model\Supports;
use App\model\Team;
use App\model\Testimonials;
use App\model\Treatments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use App\Mail;
use App\Mail\visitorMessage;
use Session;

class MyAccount extends Controller
{
    public function show_doc()
    {
        date_default_timezone_set('Asia/Dhaka');
        $value = Session::all();
        $data['client'] = Employee::where('type', 3)->where('status', 1)->get();
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['account_info'] = Logins::with('employee')->where('id', $value['login_id'])->get();
        $data['sms'] = Sms_list::where('sender', $value['emp_id'])->orWhere('receiver',$value['emp_id'])->orderBy('id','desc')->get();
        //echo'<pre>'; print_r($data['sms']);die();
        return view('vantage.pages.home.my_account_doc', $data);
    }

    public function show()
    {
        date_default_timezone_set('Asia/Dhaka');
        $value = Session::all();
        //echo '<pre>'; print_r($value); die();
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
		$data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['account_info'] = Logins::with('employee')->where('id', $value['login_id'])->get();
        $data['sms'] = Sms_list::where('sender', $value['emp_id'])->orWhere('receiver',$value['emp_id'])->orderBy('id','desc')->get();
        //echo'<pre>'; print_r($data['sms']);die();
        return view('vantage.pages.home.my_account', $data);
    }
    
	public function profile()
    {        
        $value = Session::all();
        //echo '<pre>'; print_r($value); die();
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['profile_info'] = Employee::where('id', $value['emp_id'])->get();
        
        //echo'<pre>'; print_r($data);die();
        return view('vantage.pages.home.my_profile', $data);
    }
    public function profile_doc()
    {
        $value = Session::all();
        //echo '<pre>'; print_r($value); die();
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['profile_info'] = Employee::where('id', $value['emp_id'])->get();

        //echo'<pre>'; print_r($data);die();
        return view('vantage.pages.home.my_profile_doc', $data);
    }
    
	public function msg_post(Request $request){
        date_default_timezone_set('Asia/Dhaka');
        $p=new Sms_list();
        $p->sender=$request->input('sender');
        $p->receiver=1;
        $p->content=$request->input('content');
        $p->sms_type=3;
        $p->is_attached=0;
        $p->created_at=date('Y-m-d h:i:s');
        $p->save();
        
        return redirect('myAccount/show');
    }
    public function msg_post_doc(Request $request){
        date_default_timezone_set('Asia/Dhaka');
        $p=new Sms_list();
        $p->sender=$request->input('sender');
        $p->receiver=$request->input('emp_id');
        $p->content=$request->input('content');
        $p->sms_type=2;
        $p->is_attached=0;
        $p->created_at=date('Y-m-d h:i:s');
        $p->save();

        return redirect('my_account/show');
    }	
    
}
