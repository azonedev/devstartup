<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class CustomCSS extends Controller
{
    function index(){
        $css = DB::table('setting')->get();
        return view('admin/css',['css'=>$css]);
    }
    function update(Request $r){
        $css  = [];
        $css['css']=$r->input('css');
         DB::table('setting')->where('id',1)->update($css);
        
        Session::flash('msg','Update success !');
        return redirect('/admin/css');
    }
}
