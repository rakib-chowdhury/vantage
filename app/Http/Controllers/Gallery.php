<?php

namespace App\Http\Controllers;


use App\model\Company;
use App\model\ConditionTable;
use App\model\Employee;
use App\model\GalleryCat;
use App\model\GalleryPic;
use App\model\Team;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Image;

class Gallery extends Controller
{
    public function show()
    {
        $data['company'] = Company::all();
        $data['gallery_cat'] = GalleryCat::all();
        $data['gallery_pic'] = GalleryPic::with('cat')->with('sub_category')->orderBy('cat_id')->get();
//        echo '<pre>';print_r($data['gallery_pic']);die();
        return view('vantage.pages.admin.gallery.show', $data);
    }

    public function add_cat(Request $request)
    {
        $p = new GalleryCat();
        $p->name = $request->input('cat_name');
        $p->type = 0;
        $p->created_at = date('Y-m-d');
        $p->save();
        return redirect('gallery/show');
    }
    
    public function add_sub_cat(Request $req) {
        $data['cat_id'] = $req->cat_id;
        $data['sub_cat_name'] = $req->sub_cat_name;
        $data['status'] = 1;
        
        DB::table('gallery_sub_cat')->insert($data);
        
        return redirect('gallery/show');
    }
    
    public function get_sub_category(Request $req) {
        $cat_id = $req->input('cat_id');
        
        $all_sub_catgory = DB::table('gallery_sub_cat')->select('*')->where('cat_id',$cat_id)->get();
        
//        print_r($all_sub_catgory);die();
        echo '<option value="0" >Select Sub Category</option>';
       
               foreach ($all_sub_catgory as $row) 
               {
                    echo '<option value="'.$row->sub_cat_id.'">'.$row->sub_cat_name.'</option>';
               }
    }

    public function add_post(Request $request)
    {

        $p = new GalleryPic();
        $p->cat_id = $request->input('cat_id');
        $p->sub_cat_id = $request->input('sub_cat_id');
        $p->name = $request->input('name');
        $p->image = '';
        $p->created_at = date('Y-m-d');
//        print_r($p);die();
        $p->save();
        
        $imageName = 'gallery_' . $p->cat_id . '_' . $p->id . '.' . $request->image->getClientOriginalExtension();
        $imageName1 = 'gallery_' . $p->cat_id . '_' . $p->id . '.' . $request->image->getClientOriginalExtension();
        
//        $target_path1 = public_path('images/gallery/'.$imageName);
        $target_path2 = public_path('/images/thumbnail/'.$imageName1);
        
//        Image::make($imageName1->getRealPath())->resize(200, 200)->save($target_path2);
        Image::make($request->image->getRealPath())->resize(200, 200)->save($target_path2);
//        echo $target_path;die();
//        $resize = $this->resize($imageName1, 200);
//        echo $resize;
//        die();
        $request->image->move(public_path('/images/gallery/'), $imageName);
//        copy($target_path1, $target_path);
//        $request->image->move(public_path('images/thumbnail/'), $imageName);

        GalleryPic::where('id', $p->id)->update(['image' => $imageName]);

        return redirect('gallery/show');
    }

    public function delete($id)
    {
        $image = \DB::table('gallerypic')->where('id', $id)->first();
        $file = $image->image;
        $filename = public_path() . '/images/gallery/' . $file;
        \File::delete($filename);
        DB::table('gallerypic')->where('id', '=', $id)->delete();
        return redirect('gallery/show');
    }

    public function edit_post(Request $request)
    {
        //echo '<pre>'; print_r($request->all()); die();
        $id = $request->input('id');
        $p['cat_id'] = $request->input('cat_id');

        $imageName = 'gallery_' . $p['cat_id'] . '_' . $id . '.' . $request->image->getClientOriginalExtension();
        $imageName1 = 'gallery_' . $p['cat_id'] . '_' . $id . '.' . $request->image->getClientOriginalExtension();

//        $imageName = 'gallery_' . $p->cat_id . '_' . $p->id . '.' . $request->image->getClientOriginalExtension();
//        $imageName1 = 'gallery_' . $p->cat_id . '_' . $p->id . '.' . $request->image->getClientOriginalExtension();
        
//        $target_path1 = public_path('images/gallery/'.$imageName);
        $target_path2 = public_path('/images/thumbnail/'.$imageName1);
        
//        Image::make($imageName1->getRealPath())->resize(200, 200)->save($target_path2);
        Image::make($request->image->getRealPath())->resize(250, 250)->save($target_path2);
        $request->image->move(public_path('images/gallery/'), $imageName);
        
        GalleryPic::where('id', $id)->update(['image' => $imageName]);

        return redirect('gallery/show');
    }
    
    
}
