<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ServiceController extends Controller
{
    function index(){
        $setting = DB::SELECT('SELECT * FROM setting');
        $allPlan = DB::table('domain_hosting')->get();
        return view('frontend.Server',
            [
                'setting' =>$setting,
                "allPlan" =>$allPlan
            ]);
    }
}
