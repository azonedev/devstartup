<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class HomeSingleController extends Controller
{
     public function index($page)
    {
        $setting = DB::SELECT('SELECT * FROM setting');

        $slider = DB::SELECT('SELECT * FROM slider');
        $department = DB::SELECT('SELECT * FROM department');
        $about = DB::SELECT('SELECT * FROM about');
        $solution = DB::SELECT('SELECT * FROM solution');
        $team = DB::SELECT('SELECT * FROM team');
        $tech = DB::SELECT('SELECT * FROM technology');
        return view('frontend.Home-single',
            [
                'setting' =>$setting,

                'slider' =>$slider,
                'department' =>$department,
                'about' =>$about,
                'solution' =>$solution,
                'team' =>$team,
                'tech' =>$tech,
                'page'=>$page,
            ]
        );
    }
}
