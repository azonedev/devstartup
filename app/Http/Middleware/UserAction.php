<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Support\Facades\Route;
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
        
        if($user_id!=NULL){
            return $next($request);
        }else{
            $request->session()->flash('msg', "You are not logged in (: Please login and just go ...");
            return redirect('/login');
        }
    }
}
