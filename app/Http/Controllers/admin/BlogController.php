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
        $blog = [];
        // $blog['title'] = 
        // $blog['post_by'] = 
        // $blog['post_at'] = 
    }

    function edit($id){
        $blog = DB::table('blog')->get();
        $blog_cat = DB::table('blog_category')->get();
        return view('admin.blog.Edit-blog',
            [
                'blog' =>$blog,
                'blog_cat' =>$blog_cat
            ]    
        );
    }

    function update(Request $r,$id){

    }

    function destroy($id){
        DB::table('blog')
            ->where('id',$id)
            ->delete();
        Session::flash('msg',"A blog post delete success !");
        return redirect('/admin/blog');
    }


    function catSave(Request $r){
        $cat['name'] = $r->input('catName');
        DB::table('blog_category')->insert($cat);
        Session::flash('msg', 'added new category successfully !');
        return redirect('/admin/blog');
    }
    function catDestroy($id){
        DB::table('blog_category')
            ->where('id',$id)
            ->delete();
        Session::flash('msg',"A blog category delete success !");
        return redirect('/admin/blog');
    }
}
