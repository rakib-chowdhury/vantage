<?php

namespace App\Http\Controllers;


use App\model\About_info;
use App\model\All_pics;
use App\model\Company;
use App\model\ConditionTable;
use App\model\Treatments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Image;





class Resort extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['resort_info'] = About_info::where('type', 2)->get();
        //$data['vip_resort_info'] = About_info::where('type',3)->get();
        //$data['other_info'] = About_info::where('type',4)->get();
        $data['resort_pic'] = All_pics::with('resort_cat')->where('type', 1)->get();
//        echo '<pre>';
//                print_r($data['resort_pic']);die();
        $data['resort_category'] = DB::table('resort_category')->select('*')->get();
        //$data['vip_resort_pic']=All_pics::where('type',2)->get();
        //$data['other_pic']=All_pics::where('type',3)->get();
        return view('vantage.pages.admin.resort.show', $data);
    }
    
    public function resort_category() {
        $data['company'] = Company::all();
        $data['resort_category'] = DB::table('resort_category')->select('*')->get();
        return view('vantage.pages.admin.resort.resort_category', $data);
    }


    public function get_category(Request $req) {
        $type = $req->input('type');
//        echo $type;die();
        $all_catgory = DB::table('resort_category')->select('*')->where('type',$type)->get();
        
 //       print_r($all_catgory);die();
//        echo '<option value="0" >Select Category</option>';
       
               foreach ($all_catgory as $row) 
               {
                    echo '<option value="'.$row->id.'">'.$row->resort_cat_name.'</option>';
               }
    }

    
    public function add_cat(Request $req) {
        $data['resort_cat_name'] = $req->cat_name;
        $data['type'] = $req->type;
        $data['cat_description'] = $req->description;
        $data['status'] = 1;
        
        //$data['cat_image'] = 'resort_' . 'cat'.rand(11, 99). '.'.$req->image->getClientOriginalExtension();
            
//        print_r($data);die();
        //$req->image->move(public_path('images/resort_category/'), $data['cat_image']);
        
        DB::table('resort_category')->insert($data);
        
        return Redirect::to('resort/resort_category');
    }


    public function edit_category($id) {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['all_category'] = DB::table('resort_category')->select('*')->where('id',$id)->first();
//        print_r($all_catgory);die();
        return view('vantage.pages.admin.resort.resort_edit_category', $data);
    }
    
    public function update_cat(Request $req) {
        $id = $req->id;
        $data['type'] = $req->type;
        $data['resort_cat_name'] = $req->cat_name;
        $data['cat_description'] = $req->description;
        $image = $req->image;
        if($image == 0){
        DB::table('resort_category')
            ->where('id', $id)
            ->update($data);
        }
        else{
            $data['cat_image'] = 'resort_' . 'cat' . rand(11, 99) . '.' . $image->getClientOriginalExtension();
//            print_r($data['cat_image']);die();
            $req->image->move(public_path('images/resort_category/'), $data['cat_image']);
            $data['type'] = $req->type;
            $data['resort_cat_name'] = $req->cat_name;
            $data['cat_description'] = $req->description;
            
            DB::table('resort_category')
            ->where('id', $id)
            ->update($data);
        }
//        print_r($data);die();
        return Redirect::to('resort/resort_category');
    } 

    
    public function delete_resort_cat($id) {
        DB::table('resort_category')->where('id', $id)->delete();
        
        return Redirect::to('resort/resort_category');
    }
    
    public function vip_show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['resort_info'] = About_info::where('type', 3)->get();
        //$data['resort_pic'] = All_pics::where('type', 2)->get();
        $data['resort_pic'] = All_pics::with('resort_cat')->where('type', 2)->get();
        $data['resort_category'] = DB::table('resort_category')->select('*')->get();
        
        return view('vantage.pages.admin.resort.show_vip', $data);
    }
    public function other_show()
    {
        $data['company'] = Company::all();
        $data['condition'] = ConditionTable::where('status', 1)->get();
        $data['resort_info'] = About_info::where('type', 4)->get();
        //$data['resort_pic'] = All_pics::where('type', 3)->get();
        $data['resort_pic'] = All_pics::with('resort_cat')->where('type', 3)->get();
        $data['resort_category'] = DB::table('resort_category')->select('*')->get();
        
        return view('vantage.pages.admin.resort.show_other', $data);
    }

    public function updateShortNote(Request $request)
    {
        $id = $request->input('id');
        $p['subject'] = $request->input('shortNote');
        About_info::where('id', $id)->update($p);
        return 0;
    }

    public function updateDetails(Request $request)
    {
        $id = $request->input('id');
        $p['details'] = $request->input('details');
        About_info::where('id', $id)->update($p);
        return 0;
    }

    public function picDelete($id)
    {
        $tmp = All_pics::where('id', $id)->get();
        $image = \DB::table('all_pic')->where('id', $id)->first();
        $file = $image->image;
        DB::table('all_pic')->where('id', '=', $id)->delete();
        if ($tmp[0]->type == 1) {
            $filename = public_path() . '/images/resort/' . $file;
            \File::delete($filename);
            return redirect('resort/show');
        } elseif ($tmp[0]->type == 2) {
            $filename = public_path() . '/images/vip_resort/' . $file;
            \File::delete($filename);
            return redirect('vip_resort/show');
        } elseif ($tmp[0]->type == 3) {
            $filename = public_path() . '/images/other/' . $file;
            \File::delete($filename);
            return redirect('other/show');
        }
    }

    public function picAdd(Request $request){
   
        $typ=$request->input('type');
        $cat_id=$request->input('cat_id');
        $room_name=$request->input('room_name');
        $p=new All_pics();
        $p->type=$typ;
        $p->cat_id=$cat_id;
        $p->room_name=$room_name;
        $p->image='';
        $p->created_at=date('Y-m-d');
//        print_r($p);die();
        $p->save();
        
        //Image::make($image->getRealPath())->resize(200, 200)->save($path);
        if ($typ == 1) {
            $imageName = 'resort_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $imageName1 = 'resort_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            //$imageName2 = 'resort_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            
            $target_path2 = public_path('/images/resort_thumbnail/'.$imageName1);
        
//        Image::make($imageName1->getRealPath())->resize(200, 200)->save($target_path2);
            Image::make($request->image->getRealPath())->resize(250, 250)->save($target_path2);
            
            $request->image->move(public_path('images/resort/'), $imageName);
            //$request->image->move(public_path('images/resort/thumb/'), $imageName2);
            All_pics::where('id', $p->id)->update(['image' => $imageName]);
            return redirect('resort/show');
        } 
        elseif ($typ == 2) {
            $imageName = 'vip_resort_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $imageName1 = 'vip_resort_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            
            $target_path2 = public_path('/images/resort_thumbnail/'.$imageName1);
        
//        Image::make($imageName1->getRealPath())->resize(200, 200)->save($target_path2);
            Image::make($request->image->getRealPath())->resize(250, 250)->save($target_path2);
            
            $request->image->move(public_path('images/vip_resort/'), $imageName);
            All_pics::where('id', $p->id)->update(['image' => $imageName]);
            return redirect('vip_resort/show');
        } 
        elseif ($typ == 3) {
           
            $imageName = 'other_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            $imageName1 = 'other_' . $p->id . '.' . $request->image->getClientOriginalExtension();
            
            $target_path2 = public_path('/images/resort_thumbnail/'.$imageName1);
        
//        Image::make($imageName1->getRealPath())->resize(200, 200)->save($target_path2);
            Image::make($request->image->getRealPath())->resize(250, 250)->save($target_path2);
            
            $request->image->move(public_path('images/other/'), $imageName);
            All_pics::where('id', $p->id)->update(['image' => $imageName]);
            return redirect('other/show');
        }

    }

    public function picEdit(Request $request){
        $id=$request->input('picID');
        $tmp=All_pics::where('id',$id)->get();
        $typ=$tmp[0]->type;

        if ($typ == 1) {
            $imageName = 'resort_' . $id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/resort/'), $imageName);
            All_pics::where('id', $id)->update(['image' => $imageName]);
            return redirect('resort/show');
        } elseif ($typ == 2) {
            $imageName = 'vip_resort' . $id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/vip_resort/'), $imageName);
            All_pics::where('id', $id)->update(['image' => $imageName]);
            return redirect('vip_resort/show');
        } elseif ($typ == 3) {
            $imageName = 'other' . $id . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/other/'), $imageName);
            All_pics::where('id', $id)->update(['image' => $imageName]);
            return redirect('other/show');
        }
       
    }
}
