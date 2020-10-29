<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DevelopmentController extends Controller
{
    function index(){
        $setting = DB::SELECT('SELECT * FROM setting');
        return view('frontend/Development',[
                'setting' =>$setting,
            ]);
    }
    function store(Request $r){
        $devMessage = [];
        $devMessage['name'] = $r->input('name');
        $devMessage['mobile'] = $r->input('mobile');
        $devMessage['email'] = $r->input('email');
        $devMessage['project_type'] = $r->input('project_type');
        $devMessage['link'] = $r->input('link');
        $devMessage['details'] = $r->input('details');

        DB::table('dev_message')->insert($devMessage);

        $setting = DB::SELECT('SELECT * FROM setting');
        return view('frontend/Message-success',[
                'setting' =>$setting,
            ]);
    }
}
