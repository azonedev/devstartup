<?php

namespace App\Http\Controllers\frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class ProfileController extends Controller
{
    function index(){
    	$activeCourse = count(DB::SELECT("SELECT user_id FROM course_enroll where user_id=? AND status = ? ",[Session('user_id'),'active']));
    	$blockCourse = count(DB::SELECT("SELECT user_id FROM course_enroll where user_id=? AND status = ? ",[Session('user_id'),'block']));
    	$allCourse = count(DB::table('course')->get());

    	$enrollList = DB::table('course_enroll')->where('user_id',Session('user_id'))->get();
        return view('user.dashboard',
        	[
        		'enrollList'=>$enrollList,
        		'activeCourse'=>$activeCourse,
        		'blockCourse'=>$blockCourse,
        		'allCourse' =>$allCourse
        	]
        );


    }
    function setting(){
    	$profileData = DB::table('users')->where('id',Session('user_id'))->get();
    	return view('user.profile-setting',[
    		'profileData'=>$profileData
    	]); 
    }
    function settingUpdate(Request $r,$id){

    	$update = [];
    	$update['name'] = $r->name;
    	$update['email'] = $r->email;
    	$update['mobile_no'] = $r->mobile_no;
    	$update['password'] = $r->password;
    	$image = $r->photo_url ;
    	if($image!=NULL){
    		$image_name = time().'.'. $image->getClientOriginalExtension(); //file name
            $path = public_path('/assets/app-images');//file - store
            $image->move($path,$image_name); //file move
            $update['photo_url'] = 'assets/app-images/'.$image_name; // save db 
    	}else{
    		$update['photo_url'] = $r->photo_prev;
    	}

		DB::table('users')->where('id',$id)->update($update);
    	return redirect('/profile')->with('msg','Your profile data updated successfully !');
    }
    function notVerified(){
        return view('user.error_dashboard');
    }
}
