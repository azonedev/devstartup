<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SolutionController extends Controller
{
    function index($name,$id){
        $setting = DB::SELECT('SELECT * FROM setting');
        $solution = DB::table('solution')
            ->where('id',$id)
            ->get();
        $solutionAll = DB::table('solution')
            ->limit(4)
            ->get();
        return view('frontend.Solution',
            [
                'setting' =>$setting,
                "solution" =>$solution,
                "solutionAll" =>$solutionAll
            ]);
    }
}
