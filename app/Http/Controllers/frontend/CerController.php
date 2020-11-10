<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CerController extends Controller
{
    function index(Request $r){
        $id = $r->input('cer_id');
        $setting = DB::SELECT('SELECT * FROM setting');
        $result = DB::table('certificate')
            ->where('cer_id',$id)
            ->get('cer_img_path');

        return view('frontend.cer_view',['result'=>$result,'setting'=>$setting]);
    }
}
