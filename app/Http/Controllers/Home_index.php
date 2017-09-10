<?php

namespace App\Http\Controllers;

use App\model\About_info;
use App\model\Gallery_sub_cat;
use App\model\All_pics;
use App\model\Company;
use App\model\Address;
use App\model\GalleryCat;
use App\model\GalleryPic;
use App\model\Package;
use App\model\Service;
use App\model\SiteVisitor;
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
use Mail;
use App\Mail\visitorMessage;

class Home_index extends Controller
{
    public function home()
    {
        $tmpVisitor=SiteVisitor::all();
        if(explode(' ',$tmpVisitor[0]->updated_at)[0]==date('Y-m-d')){
            $dataV['today_visit']=$tmpVisitor[0]->today_visit+1;
        }else{
            $dataV['today_visit']=1;
        }
        $dataV['total_visit']=$tmpVisitor[0]->total_visit+1;
        SiteVisitor::where('id',1)->update($dataV);
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();

        $data['team_info'] = Team::with('employee')->where('status', 1)->get();
        $data['package_info'] = Package::where('status', 1)->get();
        $data['about_info'] = About_info::where('type', 1)->get();
        $data['timelineINFO'] = About_info::where('type', 5)->get();
        $data['testimonial'] = Testimonials::where('status', 1)->orderBy('id','desc')->get();
        //echo'<pre>'; print_r($data['team_info']);die();
        return view('vantage.pages.home.index', $data);
    }

    public function services()
    {
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();

        $data['service_info'] = Service::where('status', 1)->get();
        return view('vantage.pages.home.service', $data);
    }

    public function treatments()
    {
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['healthCntre'] = About_info::where('type', 7)->get();
        $data['treatment_info'] = Treatments::where('status', 1)->get();
        return view('vantage.pages.home.treatment', $data);
    }

    public function resorts()
    {
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();

        $data['resort_info'] = About_info::where('type', 2)->get();
        $data['vip_resort_info'] = About_info::where('type', 3)->get();
        $data['other_facility_info'] = About_info::where('type', 4)->get();
        $data['resort_pic'] = All_pics::where('type', 1)->orderBy('id')->get();
        $data['vip_resort_pic'] = All_pics::where('type', 2)->orderBy('id')->get();
        $data['other_pic'] = All_pics::where('type', 3)->orderBy('id')->get();
        return view('vantage.pages.home.resorts', $data);
    }

    public function gallery(){
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();

        $data['gallery_info'] = GalleryCat::with('hasPic.sub_category')->where('status', 1)->orderBy('id')->get();
        //echo'<pre>'; print_r($data['gallery_info']);die();
        return view('vantage.pages.home.gallery', $data);
    }


    public function get_gallery_pic(Request $req){
        $gallery_pic=GalleryPic::with('sub_category')->where('cat_id',$req->input('catId'))->get();
        return response()->json($gallery_pic);
    }


    public function get_gallery_pics(Request $req){
        if($req->input('subCat')=="All")
            $gallery_pic=GalleryPic::with('sub_category')->where('cat_id',$req->input('catId'))->get();
        else{
            $gallery_pic=GalleryPic::with('sub_category')->where('cat_id',$req->input('catId'))->get();
            //$sbct=Gallery_sub_cat::where('sub_cat_name',$req->input('subCat'))->get();
            //$gallery_pic=GalleryPic::with('sub_category')->where('cat_id',$req->input('catId'))->where('sub_cat_id',$sbct[0]['sub_cat_id'])->get();

        }
        return response()->json($gallery_pic);
    }


    public function get_other_resort_pic(Request $req){
        $gallery_pic=All_pics::with('resort_cat')->where('type', 3)->orderBy('id')->get();
        return response()->json($gallery_pic);
    }


    public function get_other_resort_pics(Request $req){
        
            $gallery_pic=All_pics::with('resort_cat')->where('type', 3)->orderBy('id')->get();
//        print_r($gallery_pic);die();
        return response()->json($gallery_pic);
    }
    
    public function get_vip_resort_pic(Request $req){
        $gallery_pic=All_pics::with('resort_cat')->where('type', 2)->orderBy('id')->get();
        return response()->json($gallery_pic);
    }


    public function get_vip_resort_pics(Request $req){
        $gallery_pic=All_pics::with('resort_cat')->where('type', 2)->orderBy('id')->get();
        
//        print_r($gallery_pic);die();
        return response()->json($gallery_pic);
    }
    
    
    public function get_resort_pic(Request $req){
        $gallery_pic=All_pics::with('resort_cat')->where('type', 1)->orderBy('id')->get();
        return response()->json($gallery_pic);
    }


    public function get_resort_pics(Request $req){
        $gallery_pic=All_pics::with('resort_cat')->where('type', 1)->orderBy('id')->get();
        
//        print_r($gallery_pic);die();
        return response()->json($gallery_pic);
    }


    public function contacts()
    {
        $data['company'] = Company::all();
        $data['company_address'] = Address::where('type', 1)->get();
        $data['support_info'] = Supports::where('status', 1)->orderBy('position')->get();
        $data['location_info'] = About_info::where('type', 6)->get();
        return view('vantage.pages.home.contact', $data);
    }


    public function message_post(Request $request){
        $data3= Company::all();
        $to_email = $data3[0]->mailAddress;
        $data['name']=$request->input('name');
        $data['mobile']=$request->input('mobile');
        $data['email']=$request->input('email');
        $data['sub']=$request->input('subject');
        $data['msg']=$request->input('message');
        Mail::to($to_email)->send(new visitorMessage($data));

        $redirect_url = $request->input('redirect_url');
        return Redirect::to('contact')->with('message', 'Successfully Send');
    }

}
