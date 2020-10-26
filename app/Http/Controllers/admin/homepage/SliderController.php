<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class SliderController extends Controller
{

    public function index()
    {
        $sliderData = DB::SELECT('SELECT * FROM slider');
        return view('admin.pages.Home-slider',
            [
                'sliderData'=>$sliderData
            ]    
        );
    }

    public function store(Request $r)
    {
        $title = $r->input('title');
        $description = $r->input('description');
        $link = $r->input('link');
        $btn = $r->input('btn-name');

        $image = $r->file('image');

        // image 
        $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $image->move($path,$image_name); //file store 
        $img = 'assets/app-images/'.$image_name; //save on DB

        DB::INSERT("INSERT INTO slider
                (
                    title,
                    description,
                    link,
                    btn,
                    img
                )
                VALUES(?,?,?,?,?)
            ",
            [
                $title,
                $description,
                $link,
                $btn,
                $img
            ]    
        );

        Session::flash('msg','New slider added successfully');

        return redirect('/admin/home/slider');

    }

    public function edit($id,Request $r)
    {
        $sliderData = DB::SELECT('SELECT * FROM slider');
        $singleData = DB::SELECT('select * from slider where id=?',[$id]);
        return view('admin.pages.Home-slider-edit',
            [
                'sliderData'=>$sliderData,
                'singleData' => $singleData
            ]    
        );
    }

  
    public function update(Request $r, $id)
    {
        $title = $r->input('title');
        $description = $r->input('description');
        $link = $r->input('link');
        $btn = $r->input('btn-name');
        $status = $r->input('status');
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

        DB::update('update slider
            set 
                title = ?,
                description = ?,
                link = ?,
                btn = ?,
                img = ?,
                status = ?
            where id = ?',
            [
                $title,
                $description,
                $link,
                $btn,
                $img,
                $status,
                $id
            ]
        );
        Session::flash('msg','Slider updated successfully !');
        
        return redirect('/admin/home/slider');
    }

    
    public function destroy($id)
    {
        
        DB::update('update slider set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','Slider archrived successfully !');
        
        return redirect('/admin/home/slider');
    }
}
