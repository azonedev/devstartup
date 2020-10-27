<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Session;
class SolutionController extends Controller
{
     public function index()
    {
        $solutionData = DB::SELECT('SELECT * FROM solution');
        return view('admin.pages.Home-solution',
            [
                'solutionData'=>$solutionData
            ]    
        );
    }

    public function store(Request $r)
    {

        $solution = [];

        $solution['name'] = $r->input('name');
        $solution['blog_title'] = $r->input('blog_title');
        $solution['blog'] = $r->input('blog');
        $solution['btn'] = $r->input('btn');

        $image = $r->file('image');

        // image 
        $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $image->move($path,$image_name); //file store 
        $solution['img'] = 'assets/app-images/'.$image_name; //save on DB

        $blog_image = $r->file('blog_image');

        // blog image 
        $blog_image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $blog_path = public_path('assets/app-images'); //store path
        $blog_image->move($blog_path,$blog_image_name); //file store 
        $solution['blog_img'] = 'assets/app-images/'.$blog_image_name; //save on DB

        DB::table('solution')->insert($solution);

        Session::flash('msg','New solution added successfully');

        return redirect('/admin/home/solution');

    }

    public function edit($id,Request $r)
    {
        $solutionData = DB::SELECT('SELECT * FROM solution');
        $singleData = DB::SELECT('select * from solution where id=?',[$id]);
        return view('admin.pages.Home-solution-edit',
            [
                'solutionData'=>$solutionData,
                'singleData' => $singleData
            ]    
        );
    }

    public function update(Request $r, $id)
    {
        $solution = [];

        $solution['name'] = $r->input('name');
        $solution['blog_title'] = $r->input('blog_title');
        $solution['blog'] = $r->input('blog');
        $solution['btn'] = $r->input('btn');

        $image = $r->file('image');

        if($image != NULL){
            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $solution['img'] = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $solution['img'] = $r->input('prev-img');
        }


        $blog_image = $r->file('blog_image');

         if($blog_image != NULL){
            // blog image 
            $blog_image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $blog_path = public_path('assets/app-images'); //store path
            $blog_image->move($blog_path,$blog_image_name); //file store 
            $solution['blog_img'] = 'assets/app-images/'.$blog_image_name; //save on DB
        }else{
            $solution['blog_img'] = $r->input('prev-img-blog');
        }
        $solution['status'] = $r->input('status');

        DB::table('solution')
            ->where('id',$id)
            ->update($solution);

        Session::flash('msg','Solution updated successfully !');
        
        return redirect('/admin/home/solution');
    }

    
    public function destroy($id)
    {
        
        DB::update('update solution set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','Solution archrived successfully !');
        
        return redirect('/admin/home/solution');
    }
}
