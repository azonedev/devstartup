<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class TeacherController extends Controller
{
    function index(){
        $teacherData = DB::table('teacher')->get();

        return view('admin.course.teacher',['teacherData'=>$teacherData]);

    }


    function store(Request $r){
        $teacher = [];
        $teacher['name']= $r->input('name');
        $teacher['about'] = $r->input('about');
        $image = $r->file('image');

        if($image !=NULL){
            $image_name = time().'.'. $image->getClientOriginalExtension(); //file name
            $path = public_path('/assets/app-images');//file - store
            $image->move($path,$image_name); //file move
            $teacher['image'] = 'assets/app-images/'.$image_name; // save db 
        }
dd($image);
        exit();
        DB::table('teacher')->insert($teacher);
        Session::flash('msg','New teacher added successfully');

        return redirect()->back();
    }


    function edit($id){
        $teacherData = DB::table('teacher')->get();
        $singleData = DB::table('teacher')->where('id',$id)->get();

        return view('admin.course.teacher-edit',
        [
            'teacherData'=>$teacherData,
            'singleData'=>$singleData,

        ]);

    }
    function update(Request $r,$id){
        $teacher = [];
        $teacher['name'] = $r->input('name');
        $teacher['about'] = $r->input('about');
        $image = $r->file('image');

        if($image !=NULL){
            $image_name = time().'.'. $image->getClientOriginalExtension(); //file name
            $path = public_path('/assets/app-images');//file - store
            $image->move($path,$image_name); //file move
            $teacher['image'] = 'assets/app-images/'.$image_name; // save db 
        }else{
            $teacher['image'] = $r->input('prev_img');
        }

        $teacher['status'] = $r->input('status');

        DB::table('teacher')
            ->where('id',$id)
            ->update($teacher);

        Session::flash('msg',"Teacher updated successfully !");
        return redirect('/admin/teacher');
    }

    function destroy($id){
        DB::table('teacher')
            ->where('id',$id)
            ->update(['status'=>'archrived']);
        Session::flash('msg',"Archrived success !");
        return redirect('/admin/teacher');
    }
}
