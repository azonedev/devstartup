<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class AdminAction
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
        // test purpose
        Session::put('usermail','test');
        Session::put('role','admin');
        //delete this

        $usermail = Session('usermail');
        $role = Session('role');

        if($role=="admin"){
            return $next($request);
        }else{
            Session::flash('msg','You are not admin, Please login by admin email & password :)');

            return redirect("/login");
        }
    }
}
