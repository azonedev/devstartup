<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class AddCourseController extends Controller
{
    function index(){
        $courseData = DB::table('course')->get();
        $teacherData = DB::table('teacher')->get();
        return view('admin.course.add-course',
            [
                'courseData'=>$courseData,
                'teacherData'=>$teacherData
            ]);
    }


    function store(Request $r){
        $course = [];
        $course['name']= $r->input('name');
        $image = $r->file('image');
        
        if($image !=NULL){
            $image_name = time().'.'. $image->getClientOriginalExtension(); //file name
            $path = public_path('/assets/app-images');//file - store
            $image->move($path,$image_name); //file move
            $course['feature_image'] = 'assets/app-images/'.$image_name; // save db 
        }

        $course['lession'] = $r->input('lession');
        $course['course_fee'] = $r->input('course_fee');
        $course['discount'] = $r->input('discount');
        $course['duration'] = $r->input('duration');
        $course['class'] = $r->input('class');
        $course['start'] = $r->input('start');
        $course['single_page_name'] = $r->input('single_page_name');
        $course['teacher'] = $r->input('teacher');
        $course['sort_outline'] = $r->input('sort_outline');
        $course['why_this'] = $r->input('why_this');

        DB::table('course')->insert($course);
        Session::flash('msg','New course added successfully');

        return redirect()->back();
    }


    function edit($id){
        $singleData = DB::table('course')->where('id',$id)->get();
        $courseData = DB::table('course')->get();
        $teacherData = DB::table('teacher')->get();
        return view('admin.course.add-course-edit',
            [
                'courseData'=>$courseData,
                'teacherData'=>$teacherData,
                'singleData'=>$singleData
            ]);

    }
    function update(Request $r,$id){

        $course = [];
        $course['name']= $r->input('name');
        $image = $r->file('image');
        
        if($image !=NULL){
            $image_name = time().'.'. $image->getClientOriginalExtension(); //file name
            $path = public_path('/assets/app-images');//file - store
            $image->move($path,$image_name); //file move
            $course['feature_image'] = 'assets/app-images/'.$image_name; // save db 
        }else{
            $course['feature_image'] = $r->input('prev_img');
        }

        $course['lession'] = $r->input('lession');
        $course['course_fee'] = $r->input('course_fee');
        $course['discount'] = $r->input('discount');
        $course['duration'] = $r->input('duration');
        $course['class'] = $r->input('class');
        $course['start'] = $r->input('start');
        $course['single_page_name'] = $r->input('single_page_name');
        $course['teacher'] = $r->input('teacher');
        $course['sort_outline'] = $r->input('sort_outline');
        $course['why_this'] = $r->input('why_this');
        $course['status'] = $r->input('status');

        DB::table('course')
            ->where('id',$id)    
            ->update($course);

        Session::flash('msg','Course updated successfully !');

        return redirect('/admin/course');
    }

    function destroy($id){
        DB::table('course')
            ->where('id',$id)
            ->update(['status'=>'archrived']);
        Session::flash('msg',"Archrived success !");
        return redirect('/admin/course');
    }
}
