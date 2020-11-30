<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class CourseController extends Controller
{
    public function index(){
        $setting = DB::SELECT('SELECT * FROM setting');
        $allCourse = DB::table('course')->get();
        return view('frontend.All-course',
            [
                'setting' =>$setting,
                "course" =>$allCourse
            ]);
    }

    

    public function enroll($id){
        $setting = DB::SELECT('SELECT * FROM setting');
        $allCourse = DB::table('course')
            ->where('id',$id)
            ->get();
        return view('frontend.Enroll-course',
            [
                'setting' =>$setting,
                "course" =>$allCourse
            ]);
    }
    public function enrollSave(Request $r){

        $enroll = [];

        $enroll['name'] = $name = $r->input('name');
        $enroll['mobile'] = $mobile = $r->input('phone');
        $enroll['email'] = $email = $r->input('email');

        $payment_number = $r->input('payment');
        $trxid = $r->input('trxid');
        $payment_by = $r->input('payment_by');
        $course_name = $r->input('course_name');
        $ammount = $r->input('ammount');
        $fb_link = $r->input('fb_link');

        $enroll['project_type'] = " $name enrolled to $course_name payment $ammount tk by $payment_by";

        $enroll['details'] = "
            <h2 class='text-center'>Enrollment message</h2>
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
            Facebook profile url : <span class='text-danger'>$fb_link</span>

        ";

        DB::table('dev_message')->insert($enroll);

        // course-enrollment
        $course_en = [];
        $course_en['course_id'] = $r->course_id;
        $course_en['user_id'] = $r->user_id;
        $course_en['message_id'] = DB::table('dev_message')->get()->last()->id; 
        $course_en['name'] = $name;
        $course_en['course_name'] = $course_name;
        $course_en['fb_link'] = $fb_link;
        $course_en['trid'] = $trxid;
        $course_en['pay_by'] = $payment_by;
        $course_en['pay_from'] = $payment_number;
        $course_en['total'] = $r->total;
        $course_en['due'] = $ammount;
        $course_en['create_date'] = date('Y-m-d');
        $course_en['status'] = 'block';
        
        DB::table('course_enroll')->insert($course_en);
        
        // DB::table('')

        Session::flash('enroll',"$course_name is successfully enrolled but it takes some time to aprove, So please wait. If is emergency call : 01746 68 68 68");
         
        return redirect('/profile');
    }

    public function details($id){
        $setting = DB::SELECT('SELECT * FROM setting');
        $allCourse = DB::table('course')
            ->where('id',$id)
            ->get();
        $course_outline = DB::table('course_outline')
            ->where('course_id',$id)
            ->get();
        return view('frontend.Details-course',
            [
                'setting' =>$setting,
                'course'    =>$allCourse,
                'outline'    =>$course_outline

            ]);
    }


}
