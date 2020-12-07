<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Mail;
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
        $img = $r->img;
        $token = $r->_token;

        $check_email = DB::table('users')->where('email', $email)->pluck('email');

        if(count($check_email)>0){

            Session::flash('msg','Your mail is already used !!');

            if($url!="0"){
                $re_url = "/register/".$url;
                return redirect($re_url);
            }else{
                return redirect('register');

            }
        }
        else{

            // register process start here...

            if($img !=NULL){
                $image_name = time().'.'.$img->getClientOriginalExtension();
                $path = public_path('../asstes/app-images');
                $img->move($path,$image_name);
                $photo ='asstes/app-images/'.$image_name;
                        $image = $r->file('feature_image');
            }

            DB::INSERT("INSERT INTO users (
                    name,
                    email,
                    mobile_no,
                    password,
                    photo_url,
                    token
                )
                VALUES(?,?,?,?,?,?)",
                [
                    $name,
                    $email,
                    $mobile_no,
                    $password,
                    $photo,
                    $token
                ]
            );
            // end of reigster
            // send mail
            
               $user_id = DB::table('users')->where('email', $email)->value('id');

                $data = array('name'=>$name,'user_id'=>$user_id,'token'=>$token);

                $user = array('email'=>$email,'name'=>$name);

                Mail::send('mail', $data, function($message) use ($user)  {
                    $message->to($user['email'], $user['name'])->subject
                        ('user authentication');
                    $message->from('info@mamurjor.com','mamurjor');
                });

            // start login 

            $redirect_url = $url;

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
                        $note = $value->note;

                        Session::put('user_id',$user_id);
                        Session::put('usermail',$usermail);
                        Session::put('username',$username);
                        Session::put('mobile_no',$mobile_no);
                        Session::put('role',$role);
                        Session::put('status',$note);

                        Session::flash('msg', 'Login Success');
                        
                        if($redirect_url!="0"){
                            
                            Session::put('url',$url);//this session is use to redirect after verify 

                            return redirect("/$redirect_url");
                        }else if($role=="admin"){
                            return redirect('/admin');
                        }else{
                            return redirect('/profile');
                        }
                    }
                }
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
                    $note = $value->note;

                    Session::put('user_id',$user_id);
                    Session::put('usermail',$usermail);
                    Session::put('username',$username);
                    Session::put('mobile_no',$mobile_no);
                    Session::put('role',$role);
                    Session::put('status',$note);

                    Session::flash('msg', 'Login Success');
                    
                    
                    if($redirect_url!="0"){
                        return redirect("/$redirect_url");
                    }else if($role=="admin"){
                        return redirect('/admin');
                    }else{
                        return redirect('/profile');
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
        Session::forget('status');

        Session::flash('msg', 'Logout Success');

        return redirect('/');
    }

}
