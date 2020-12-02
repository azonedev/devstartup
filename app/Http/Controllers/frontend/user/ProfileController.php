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

    function lession(Request $r,$id){
    	$coursename = DB::table('course')->where('id',$id)->value('name');
    	$lession = DB::table('video_lession')->whereJsonContains('course_id', $id)->paginate(12);

    	return view('user.lession',[
    		'lession'=>$lession,
    		'coursename'=>$coursename
    	]);	
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

    function partialPay(Request $r,$id){
        $enroll = [];

        $enroll['name'] = $name = Session('username');
        $enroll['mobile'] = $mobile = Session('mobile_no');
        $enroll['email'] = $email = Session('usermail');

        $payment_number = $r->payment_no;
        $trxid = $r->trxid;
        $payment_by = $r->input('payment_by');
        $course_name = $r->input('course_name');
        $ammount = $r->input('ammount');

        $enroll['project_type'] = " $name partial payment for $course_name paid $ammount tk by $payment_by";

        $enroll['details'] = "
            <h2 class='text-center'>Partial Payment</h2>
            <br>
            Student name : $name
            <br>
            E-mail : $email
            <br>
            Mobile no : $mobile
            <br>
            Course Name : $course_name
            <br>
            Ammount : <span class='text-danger'>$ammount</span>
            <br>
            TrnxID : <span class='text-danger'>$trxid</span>
            <br>
            Pamyent by : <span class='text-danger'>$payment_by</span>
             <br>
            

        ";

        DB::table('dev_message')->insert($enroll);

        $due= $r->due;
        $update = [];
        $update['due'] = $due + $ammount;
        DB::table('course_enroll')->where('id',$id)->update($update);

        return redirect()->back()->with('msg',"Partial payment successfully !");
    }

    function notVerified(){
        return view('user.error_dashboard');
    }
}
