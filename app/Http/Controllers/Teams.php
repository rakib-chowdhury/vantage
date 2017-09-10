<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Employee;
use App\model\Service;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Teams extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['team_info'] = Team::with('employee')->get();
        return view('vantage.pages.admin.team.show', $data);
    }

    public function delete($id)
    {
        DB::table('team')->where('id', '=', $id)->delete();
        return redirect('team/show');
    }

    public function add()
    {
        $data['company'] = Company::all();
        $data['employee'] = Employee::where('type', 2)->orWhere('type',1)->where('status', 1)->get();
        $data['team'] = Team::all();
        return view('vantage.pages.admin.team.add', $data);
    }

    public function add_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
            'role' => 'required',
            'emp_id' => 'required',
            'shortNote' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('team/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p = new Team();
            $p->subject = $request->input('shortNote');
            $p->details = $request->input('description');
            $p->image = '';
            $p->role = $request->input('role');
            $p->emp_id = $request->input('emp_id');
            $p->created_at = date('Y-m-d');
            $p->save();

            $imageName = 'team_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/team/'), $imageName);
            Team::where('id', $p->id)->update(['image' => $imageName]);

            return redirect('team/show');
        }
    }

    public function edit($id)
    {
        $data['company'] = Company::all();
        $data['teams'] = Team::where('id', $id)->get();
        $data['employee'] = Employee::where('type', 2)->orWhere('type',1)->where('status', 1)->get();
        $data['team'] = Team::all();
        return view('vantage.pages.admin.team.edit', $data);
    }

    public function edit_post(Request $request)
    {
        $id = $request->input('id');
        $isImg = $request->input('isImg');
        if ($isImg == 1) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image|mimes:JPEG,PNG,JPG,GIF,jpeg,png,jpg,gif,svg|max:1024',
                'role' => 'required',
                'emp_id' => 'required',
                'shortNote' => 'required',
                'description' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'role' => 'required',
                'emp_id' => 'required',
                'shortNote' => 'required',
                'description' => 'required',
            ]);
        }
        if ($validator->fails()) {
            return redirect('team/add')
                ->withInput($request->all())
                ->withErrors($validator->errors());
        } else {
            $p['subject'] = $request->input('shortNote');
            $p['details'] = $request->input('description');
            $p['role'] = $request->input('role');
            $p['emp_id'] = $request->input('emp_id');
            Team::where('id', $id)->update($p);

            if ($isImg == 1) {
                $imageName = 'team_' . $id . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/team/'), $imageName);
                Team::where('id', $id)->update(['image' => $imageName]);
            }
            return redirect('team/show');
        }
    }
}
