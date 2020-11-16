<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Session;

class BlogController extends Controller
{
    function index(){
        $blog = DB::table('blog')->get();
        $blog_cat = DB::table('blog_category')->get();
        return view('admin.blog.Blog',
            [
                'blog' =>$blog,
                'blog_cat' =>$blog_cat
            ]    
        );
    }

    function store(Request $r){

    }

    function edit($id){

    }

    function update(Request $r,$id){

    }

    function destroy($id){

    }
}
