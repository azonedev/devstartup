<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;

class GeneralUser extends Controller
{

    public function index($url='0')
    {

        return view("user.userRegister",['re_url'=>$url]);
    }

    public function store(Request $r)
    {
        $name = $r->name;
        $email = $r->email;
        $mobile_no = $r->mobile_no;
        $password = $r->password;
        $url = $r->url;

        DB::INSERT("INSERT INTO users (
                name,
                email,
                mobile_no,
                password
            )
            VALUES(?,?,?,?)",
            [
                $name,
                $email,
                $mobile_no,
                $password
            ]
        );
        
        Session::flash('msg','Register successfully ! Please login');
        
        if($url!=0){
            return redirect("/login/$url");
        }else{
            return redirect('/login');
        }
    }


    public function showLogin($url='0')
    {   
        return view('user.user-login',[
            're_url'=>$url
        ]);
    }

    public function matchLogin(Request $r)
    {
        $email = $r->email;
        $password = $r->password;

        $redirect_url = $r->input('redirect_url');

        $check_user_data = DB::SELECT('SELECT * FROM users
                                    WHERE email=? AND password =?
                                    ',
                                    [
                                        $email,
                                        $password
                                    ]
                                );


            if(count($check_user_data)>0){
                foreach ($check_user_data as $value) {

                    $user_id = $value->id;
                    $usermail = $value->email;
                    $username = $value->name;
                    $mobile_no = $value->mobile_no;
                    $role = $value->role;

                    Session::put('user_id',$user_id);
                    Session::put('usermail',$usermail);
                    Session::put('username',$username);
                    Session::put('mobile_no',$mobile_no);
                    Session::put('role',$role);

                    Session::flash('msg', 'Login Success');
                    
                    if(!$redirect_url==0){
                        return redirect("/$redirect_url");
                    }else if($role=="admin"){
                        return redirect('/admin');
                    }else{
                        return redirect('/');
                    }
                }
            }else{
                Session::flash('msg', 'Your info is worng ! Please give your correct info & login :)');

                return redirect('/login'); 
            }
        }

    


    public function logout()
    {
        Session::forget('user_id');
        Session::forget('usermail');
        Session::forget('username');
        Session::forget('mobile_no');
        Session::forget('role');

        Session::flash('msg', 'Logout Success');

        return redirect('/');
    }

}
