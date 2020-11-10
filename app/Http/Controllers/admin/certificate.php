<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class certificate extends Controller
{
    function index(){
        $allCer = DB::table('certificate')->get();
        return view('admin.certificate',['cer'=>$allCer]);
    }

    function store(Request $r){
        $cer = [];
        $cer['cer_id'] = $r->input('cer_id');
        $cer_img = $r->file('cer_img');

        $image_name =  time() . '.' . $cer_img->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $cer_img->move($path,$image_name); //file store 
        $cer['cer_img_path'] = 'assets/app-images/'.$image_name; //save on DB

        DB::table('certificate')->insert($cer);
        Session::flash('Certificate added successfully');
        return redirect('/admin/cer');
    }
}
