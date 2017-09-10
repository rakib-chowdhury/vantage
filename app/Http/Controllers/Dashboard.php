<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Employee;
use App\model\SiteVisitor;
use App\model\Treatments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Dashboard extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['visitor'] = SiteVisitor::all();
        $data['doctor'] = Employee::where('type',2)->get();
        $data['client'] = Employee::where('type',3)->get();
        $data['client_pending'] = Employee::where('type',3)->where('status',2)->get();

        return view('vantage.pages.index', $data);
    }
}
