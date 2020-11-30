<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class StudentManageController extends Controller
{
    function index(){

    	$enrollList = DB::table('course_enroll')->get();
    	
    	return view('admin.student.enroll-list',['enrollList'=>$enrollList]);
    }

    function assign(Request $r,$id){
    	$update = [];
    	$update['status'] = $r->status;
    	$update['valid'] = $r->valid;
    	DB::table('course_enroll')->where('id',$id)->update($update);
    	Session::flash('msg','Enrollment updated success');
    	return redirect()->back();
    }
    function destroy($id){
    	DB::table('course_enroll')->where('id',$id)->delete();
    	return redirect()->back()->with('msg',"Delete successfully !");
    }
}
