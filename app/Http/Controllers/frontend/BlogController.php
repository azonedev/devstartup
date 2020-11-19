<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    function index(){
        $setting = DB::table('setting')->get();
        $blog = DB::table('blog')->orderByDesc('id')->limit(12)->get();
        $sol_ad = DB::table('solution')->inRandomOrder('id')->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder('id')->limit(1)->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->limit(5)->get();

        return view('frontend.blog.Blog',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth
        ]);
    }
}
