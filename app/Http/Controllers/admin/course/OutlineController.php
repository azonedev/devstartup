<?php

namespace App\Http\Controllers\admin\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class OutlineController extends Controller
{
    function index(){
        $courseData = DB::table('course')->get();
        $outlineData = DB::table('course_outline')->get();
        return view('admin.course.outline',
            [
                'courseData'=>$courseData,
                'outlineData'=>$outlineData
            ]);
    }

    function store(Request $r){
        $outline = [];
        $outline['lession_title']= $r->input('lession_title');
        $outline['course_id']= $r->input('course_id');
        $outline['lession_items']= $r->input('lession_items');

        DB::table('course_outline')->insert($outline);
        Session::flash('msg','New course lession added successfully');

        return redirect()->back();
    }


    function edit($id){
        $singleData = DB::table('course_outline')->where('id',$id)->get();
        $courseData = DB::table('course')->get();
        $outlineData = DB::table('course_outline')->get();
        return view('admin.course.outilne-edit',
            [
                'courseData'=>$courseData,
                'outlineData'=>$outlineData,
                'singleData'=>$singleData,
            ]);
    }
    function update(Request $r,$id){
        $outline = [];
        $outline['lession_title']= $r->input('lession_title');
        $outline['course_id']= $r->input('course_id');
        $outline['lession_items']= $r->input('lession_items');
        $outline['status']= $r->input('status');

        DB::table('course_outline')
            ->where('id',$id)
            ->update($outline);

        Session::flash('msg',"Course Lession updated successfully !");
        return redirect('/admin/outline');
    }

    function destroy($id){
        DB::table('course_outline')
            ->where('id',$id)
            ->update(['status'=>'archrived']);
        Session::flash('msg',"Archrived success !");
        return redirect('/admin/outline');
    }
}
