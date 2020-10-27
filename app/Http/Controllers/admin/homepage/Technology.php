<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class Technology extends Controller
{
   
     public function index()
    {
        $technologyData = DB::SELECT('SELECT * FROM technology');
        return view('admin.pages.Home-technology',
            [
                'technologyData'=>$technologyData
            ]    
        );
    }

    public function store(Request $r)
    {

        $technology = [];

        $technology['name'] = $r->input('name');

        $image = $r->file('image');

        // image 
        $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $image->move($path,$image_name); //file store 
        $technology['img'] = 'assets/app-images/'.$image_name; //save on DB

        DB::table('technology')->insert($technology);

        Session::flash('msg','New technology added successfully');

        return redirect('/admin/home/technology');

    }

    public function edit($id,Request $r)
    {
        $technologyData = DB::SELECT('SELECT * FROM technology');
        $singleData = DB::SELECT('select * from technology where id=?',[$id]);
        return view('admin.pages.Home-technology-edit',
            [
                'technologyData'=>$technologyData,
                'singleData' => $singleData
            ]    
        );
    }

    public function update(Request $r, $id)
    {
        $technology = [];

        $technology['name'] = $r->input('name');

        $image = $r->file('image');

        if($image != NULL){
            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $technology['img'] = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $technology['img'] = $r->input('prev-img');
        }
        
        $technology['status'] = $r->input('status');

        DB::table('technology')
            ->where('id',$id)
            ->update($technology);

        Session::flash('msg','technology updated successfully !');
        
        return redirect('/admin/home/technology');
    }

    
    public function destroy($id)
    {
        
        DB::update('update technology set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','technology archrived successfully !');
        
        return redirect('/admin/home/technology');
    }

}
