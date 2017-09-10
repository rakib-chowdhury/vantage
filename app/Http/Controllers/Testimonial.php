<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Service;
use App\model\Testimonials;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class Testimonial extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['testimonial_info'] = Testimonials::all();
        return view('vantage.pages.admin.testimonial.show', $data);
    }

    public function add_post(Request $request)
    {
        $p = new Testimonials();
        $p->details = $request->input('comment');
        $p->image = '';
        $p->emp_id = '0';
        $p->created_at = date('Y-m-d');
        $p->save();

        return redirect('testimonial/show');
    }

    public function delete($id)
    {
        DB::table('testimonial')->where('id', '=', $id)->delete();
        return redirect('testimonial/show');
    }

    public function edit_post(Request $request)
    {
        $id = $request->input('id');
      
        $p['details'] = $request->input('comment');

        Testimonials::where('id', $id)->update($p);

        return redirect('testimonial/show');        
    }
}
