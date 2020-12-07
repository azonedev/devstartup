<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
class MailController extends Controller
{
    function resend(Request $r)
    {
    	$token = $r->_token;
    	$user_id = $r->user_id;
    	$name = $r->name;
    	$email = $r->email;

// update user verify token 
    	DB::table('users')->where('id',$user_id)->update(['token'=>$token]);
// resend mail

        $data = array('name'=>$name,'user_id'=>$user_id,'token'=>$token);

		$user = array('email'=>$email,'name'=>$name);

        Mail::send('mail', $data, function($message) use ($user)  {
            $message->to($user['email'], $user['name'])->subject
                        ('user authentication');
            $message->from('info@mamurjor.com','mamurjor');
        });

        return redirect()->back()->with('msg','Verify token send your mail, Please check & active your account');
    }

    function verify($id,$token){
    	$prev_token = DB::table('users')->where('id',$id)->value('token');
    	if($prev_token==$token){
    		DB::table('users')->where('id',$id)->update(['verify_status'=>'verified']);

    		if(Session::has('url')){

    		}else{
    			return redirect('/profile')->with('msg','Your account activation success !');
    		}
    	}else{
    		return redirect('/profile')->with('msg','Your account activation link is invalid !!! resend verify mail');
    	}

    }
}
