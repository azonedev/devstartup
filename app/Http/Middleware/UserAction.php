<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Route;
use DB;
class UserAction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle($request, Closure $next)
    {
        $user_id = $request->session()->get('user_id');
        
        $user = DB::table('users')->where('id',$user_id)->pluck('verify_status');
        if($user_id!=NULL && $user == '["verified"]'){
            return $next($request);
        }else{
            if(empty($user_id)){
                Session::flash('msg', "You are not logged in, Please login and just go ...");
                return redirect('/login');
            }else{
                return redirect('/profile/not_verified');
            }
        }
    }
}
