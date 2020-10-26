<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class DepartmentController extends Controller
{
    public function index()
    {
        $deptData = DB::SELECT('SELECT * FROM department');
        return view('admin.pages.Home-dept',
            [
                'deptData'=>$deptData
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

        DB::INSERT("INSERT INTO department
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

        Session::flash('msg','New department added successfully');

        return redirect('/admin/home/dept');

    }

    public function edit($id,Request $r)
    {
        $deptData = DB::SELECT('SELECT * FROM department');
        $singleData = DB::SELECT('select * from department where id=?',[$id]);
        return view('admin.pages.Home-dept-edit',
            [
                'deptData'=>$deptData,
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

        DB::update('update department
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
        Session::flash('msg','Department updated successfully !');
        
        return redirect('/admin/home/dept');
    }

    
    public function destroy($id)
    {
        
        DB::update('update department set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','Department archrived successfully !');
        
        return redirect('/admin/home/dept');
    }
}
