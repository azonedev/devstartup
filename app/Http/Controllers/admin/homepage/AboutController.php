<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class AboutController extends Controller
{
    function index(){
        $aboutData = DB::SELECT('SELECT * FROM about');
        return view('admin.pages.Home-about',
            [
                'aboutData'=>$aboutData
            ]    
        );
    }

     public function update(Request $r, $id)
    {
        $description = $r->input('description');
        $link = $r->input('link');
        $btn = $r->input('btn-name');
        $image = $r->file('image');
        if($image !=NULL){
            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $img = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $img = $r->input('prev-img');
        }

        DB::update('update about
            set 
                description = ?,
                link = ?,
                btn = ?,
                img = ?
            where id = ?',
            [
                $description,
                $link,
                $btn,
                $img,
                $id
            ]
        );
        Session::flash('msg','About company updated successfully !');
        
        return redirect('/admin/home/about');
    }
}
