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
        $sol_ad = DB::table('solution')->inRandomOrder()->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(1)->get();

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
    function single($slug,$id){
        $setting = DB::table('setting')->get();
        
        $blog = DB::table('blog')
            ->join('users','blog.user_id', '=', 'users.id')
            ->select('blog.*','users.photo_url')
            ->where('blog.id',$id)->get();

        $sol_ad = DB::table('solution')->inRandomOrder()->limit(2)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(2)->get();

        $adright = DB::table('blog')
            ->join('solution','blog.solution_ad', '=', 'solution.id')
            ->join('course','blog.training_ad', '=', 'course.id')
            ->select('solution.name','solution.img','course.feature_image')
            ->where('blog.id',$id)
            ->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->limit(5)->get();

        return view('frontend.blog.Blog-single',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth,
            'adright'   =>$adright,
        ]);
    }
}
