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
        $user = DB::table('users')->where('role','admin')->get();
        $training = DB::table('course')->get();
        $solution = DB::table('solution')->get();
        return view('admin.blog.Blog',
            [
                'blog' =>$blog,
                'blog_cat' =>$blog_cat,
                'user'       =>$user,
                'training'  =>$training,
                'solution'  =>$solution
            ]    
        );
    }

    function store(Request $r){
        $blog = [];
        $blog['title'] = $r->input('title');
        $blog['post_by'] = $r->input('post_by');
        $blog['cat_id'] = $r->input('cat_id');
        $blog['post_at'] = date('Y-m-d');
        $blog['blog'] = $r->input('blog');
        $blog['tag'] = $r->input('tag');
        $blog['alt'] = $r->input('alt');
        $blog['training_ad'] = $r->input('training_ad');
        $blog['solution_ad'] = $r->solution_ad;

        $image = $r->file('feature_image');
        // image 
        $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $image->move($path,$image_name); //file store 
        $blog['feature_image'] = 'assets/app-images/'.$image_name; //save on DB

        DB::table('blog')->insert($blog);

        Session::flash('msg','Insert successfully !');
        return redirect('admin/blog');
    }

    function edit($id){
        $blog = DB::table('blog')->get();
        $blogSingle = DB::table('blog')->where('id',$id)->get();
        $blog_cat = DB::table('blog_category')->get();
        $user = DB::table('users')->where('role','admin')->get();

        $training = DB::table('course')->get();
        $solution = DB::table('solution')->get();

        return view('admin.blog.Edit-blog',
            [
                'blog' =>$blog,
                'blog_cat' =>$blog_cat,
                'blogSingle' =>$blogSingle,
                'user'       =>$user,
                'training'  =>$training,
                'solution'  =>$solution
            ]    
        );
    }

    function update(Request $r,$id){
        $blog = [];
        $blog['title'] = $r->input('title');
        $blog['post_by'] = $r->input('post_by');
        $blog['cat_id'] = $r->input('cat_id');
        $blog['post_at'] = date('Y-m-d');
        $blog['blog'] = $r->input('blog');
        $blog['tag'] = $r->input('tag');
        $blog['alt'] = $r->input('alt');
        
        $blog['training_ad'] = $r->input('training_ad');
        $blog['solution_ad'] = $r->input('solution_ad');

        $image = $r->file('feature_image');
        if($image !=NULL){

            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $blog['feature_image'] = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $blog['feature_image'] = $r->input('prev_img');
        }

        DB::table('blog')->where('id',$id)->update($blog);
        Session::flash('msg',"Blog post updated success !");
        return redirect('/admin/blog');
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
