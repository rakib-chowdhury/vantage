<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Logins;
use App\model\Company;
use Session;

use App\Http\Requests;

class login extends Controller
{
    public function index()
    {
        $data['all_info'] = Company::all();
        $data['company'] = Company::all();
        return view('vantage.pages.login.login', $data);
    }

    public function login_check(Request $request)
    {
        if (isset($_POST['login'])) {
            $email = $request->input('email');
            $password = md5($request->input('password'));

            $data = Logins::where('email', $email)->where('password', $password)->where('status',1)->get();
            $result = count($data);

            if ($result == 0) {
                $message = $request->session()->flash('message', 'Invalid EMAIL or PASSWORD');
                return redirect('Login');
            } else {
                //	echo 'pass'; die();
//                $all_data = array(
//                    'email' => $data[0]['email'],
//                    'reg_id' => $data[0]['emp_id'],
//                    'login_id' => $data[0]['id'],
//                    'type' => $data[0]['type'],
//                    'logged_in' => TRUE
//                );
                Session::put('login_id', $data[0]['id']);
                Session::put('emp_id', $data[0]['emp_id']);
                Session::put('email', $data[0]['email']);
                Session::put('type', $data[0]['type']);
                //$message = $request->session()->flash('message', 'Logged in Successfully');
                if ($data[0]['type'] == 1) {
                    return redirect('myAccount/show');
                } elseif ($data[0]['type'] == 2) {
                    return redirect('my_account/show');
                } else {
                    return redirect('home/index');
                }
                //return redirect('home/index');
            }
        } else {

            $message = $request->session()->flash('message', 'Invalid EMAIL or PASSWORD');
            return redirect('Login');
        }
    }
}
