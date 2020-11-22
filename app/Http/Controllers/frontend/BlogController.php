<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
{
    function index(){
        $setting = DB::table('setting')->get();
        $blog = DB::table('blog')->orderByDesc('id')->paginate(12);
        $sol_ad = DB::table('solution')->inRandomOrder()->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(1)->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->where('role','admin')->limit(5)->get();

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

        $blog_next = DB::table('blog')->where('id','>',$id)->limit(1)->get();
        $blog_prev = DB::table('blog')->where('id','<',$id)->limit(1)->get();

        $sol_ad = DB::table('solution')->inRandomOrder()->limit(2)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(2)->get();

        $adright = DB::table('blog')
            ->join('solution','blog.solution_ad', '=', 'solution.id')
            ->join('course','blog.training_ad', '=', 'course.id')
            ->select('solution.name','solution.img','course.feature_image')
            ->where('blog.id',$id)
            ->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->where('role','admin')->limit(5)->get();

        return view('frontend.blog.Blog-single',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth,
            'adright'   =>$adright,
            'blog_prev'   =>$blog_prev,
            'blog_next'   =>$blog_next,
        ]);
    }

    function categoryAll(){
        $setting = DB::table('setting')->get();
        $auth = DB::table('blog_category')->get();

        return view('frontend.blog.Category-all',[
            'setting'   =>$setting,
            'auth'      =>$auth
        ]);
    }
    function category($category){
        $setting = DB::table('setting')->get();
        $blog = DB::table('blog')->where('cat_id',$category)->orderByDesc('id')->paginate(12);
        $sol_ad = DB::table('solution')->inRandomOrder()->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(1)->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->where('role','admin')->limit(5)->get();

        return view('frontend.blog.Blog-category',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth,
            'blog_single_cat'=>$category,
        ]);
    }
    function authAll(){
        $setting = DB::table('setting')->get();
        $auth = DB::table('users')->where('role','admin')->get();

        return view('frontend.blog.Auth-all',[
            'setting'   =>$setting,
            'auth'      =>$auth
        ]);
    }

    function authSingle($name,$id){
        $setting = DB::table('setting')->get();
        $blog = DB::table('blog')->where('user_id',$id)->orderByDesc('id')->paginate(12);
        $sol_ad = DB::table('solution')->inRandomOrder()->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(1)->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->where('role','admin')->limit(5)->get();

        return view('frontend.blog.Auth-single',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth,
            'username'=>$name,
        ]);
    }
    function tag($name){
        $setting = DB::table('setting')->get();
        $blog = DB::table('blog')->where('tag','like',"%$name%")->orderByDesc('id')->paginate(12);
        $sol_ad = DB::table('solution')->inRandomOrder()->limit(1)->get();
        $train_ad = DB::table('course')->inRandomOrder()->limit(1)->get();

        $blog_cat = DB::table('blog_category')->limit(6)->get();
        $auth = DB::table('users')->where('role','admin')->limit(5)->get();

        return view('frontend.blog.Blog-tag',[
            'setting'   =>$setting,
            'blog'      =>$blog,
            'sol_ad'    =>$sol_ad,
            'train_ad'  =>$train_ad,
            'blog_cat'  =>$blog_cat,
            'auth'      =>$auth,
            'tag'=>$name,
        ]);
    }


}
