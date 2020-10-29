<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DevelopmentController extends Controller
{
    function index(){
        $setting = DB::SELECT('SELECT * FROM setting');
        return view('frontend/development',[
                'setting' =>$setting,
            ]);
    }
}
