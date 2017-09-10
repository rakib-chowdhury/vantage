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

class Message extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['client'] = Employee::where('type', 3)->where('status', 1)->get();
        //$data['sms'] = Sms_list::where('sender', $value['emp_id'])->orderBy('id','desc')->get();
        //echo'<pre>'; print_r($data);die();
        return view('vantage.pages.admin.message.show', $data);
    }

    public function get_message($id)
    {
        $data = Sms_list::with('sender')->with('receiver')->where('sender', $id)->orWhere('receiver',$id)->orderBy('id', 'desc')->get();

        return response()->json($data);

    }

    public function new_message($flag)
    {
        
        $data['company'] = Company::all();
        if($flag=='new'){
            $data['client'] = Employee::where('type', 3)->where('status', 1)->get();
        }else{
            $data['client'] = Employee::where('id', $flag)->get();
        }
        return view('vantage.pages.admin.message.new_message', $data);
    }

    public function send_message(Request $request)
    {
        //echo '<pre>';
        //print_r($request->all()); die();
        date_default_timezone_set('Asia/Dhaka');
        $p = new Sms_list();
        $p->sender = 1;
        $p->receiver = $request->input('emp_id');
        $p->content = $request->input('content');
        $p->sms_type = 1;
        $p->is_attached = 0;
        $p->created_at = date('Y-m-d h:i:s');
        $p->save();

        return redirect('message/list');
    }


}
