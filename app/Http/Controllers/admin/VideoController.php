<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class VideoController extends Controller
{
    function indexCat(){

        $videoCategory = DB::table('video_category')->get();

        return view('admin.video.category',['videoCategory'=>$videoCategory]);

    }

    function storeCat(Request $r){
        DB::table('video_category')->insert($r->all());

        Session::flash('msg',"Video cateogry added !");
        return redirect()->back();
    }

    function editCat($id){
        $videoCategory = DB::table('video_category')->get();
        $singleCategory = DB::table('video_category')->where('id',$id)->get();

        return view('admin.video.category-edit',['videoCategory'=>$videoCategory,'singleCategory'=>$singleCategory]);
    }

    function updateCat(Request $r,$id){
        DB::table('video_category')->where('id',$id)->update($r->all());

        Session::flash('msg','data updated done');
        return redirect('/admin/video-category');
    }

    function destroyCat($id){
        DB::table('video_category')
            ->where('id',$id)
            ->delete();
        Session::flash('msg', "Delete success !");
        return redirect()->back();
    }


    // video-lession
    function index(){
        $videolession = DB::table('video_lession')->get();
        $videoCategory = DB::table('video_category')->get();
        $course = DB::table('course')->get();
        return view('admin.video.lession',['videolession'=>$videolession,'video_cat'=>$videoCategory,'course'=>$course]);
    }

    function store(Request $r){
        $lession = [];
        
        $lession['link'] = $r->input('link');
        $lession['video_cat_id'] = $r->input('video_cat_id');
        $lession['title'] = $r->input('title');
        $lession['alt'] = $r->input('alt');
        $lession['course_id'] = json_encode($r->input('course_id'));
        $file = $r->file('thumbnail');

        $image_name = time().'.'.$file->getClientOriginalExtension();
        $path = public_path('/assets/app-images');
        $file->move($path,$image_name);
        $lession['thumbnail'] = 'assets/app-images/'.$image_name;
        
        DB::table('video_lession')->insert($lession);

        Session::flash('msg',"Lession insert success !");

        return redirect('/admin/video-lession');

        
    }

    // function update(Request $r,$id){
    //     $lession = [];
    //     $lession['link'] = $r->input('link');
    //     $lession['video_cat_id'] = $r->input('video_cat_id');
    //     $file = $r->file('thumbnail');

    //     $image_name = time().'.'.$file->getClientOriginalExtension();
    //     $path = public_path('/assets/app-images');
    //     $file->move($path,$image_name);
    //     $lession['thumbnail'] = 'assets/app-images/'.$image_name;
        
    //     DB::table('video_lession')->insert($lession);

    //     Session::flash('msg',"Lession insert success !");

    //     return redirect('/admin/video-lession');

        
    // }
    function destroy($id){
         DB::table('video_lession')
            ->where('id',$id)
            ->delete();
        Session::flash('msg', "Delete success !");
        return redirect()->back();
    }



    // Frontend
    function videoLession(){
        $setting = DB::table('setting')->get();
        $videoCategory = DB::table('video_category')->get();

        return view('frontend.All-lession',['setting'=>$setting,'videoCategory'=>$videoCategory]);
    }

    function videoLessionSingle($name,$id){
        $setting = DB::table('setting')->get();
        $videolession = DB::table('video_lession')
            ->where('video_cat_id',$id)
            ->get();

        return view('frontend.Lession',['setting'=>$setting,'videolession'=>$videolession,'name'=>$name]);
    }
}
