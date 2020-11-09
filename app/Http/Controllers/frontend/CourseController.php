<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
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


        $setting = DB::SELECT('SELECT * FROM setting');
        return view('frontend.Enroll-success',
            [
                'setting' =>$setting
            ]);
    }

    public function details($id){
        $setting = DB::SELECT('SELECT * FROM setting');
        $allCourse = DB::table('course')->get();
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
