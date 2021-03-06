<?php

namespace App\Http\Controllers\frontend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $setting = DB::SELECT('SELECT * FROM setting');

        $slider = DB::SELECT('SELECT * FROM slider');
        $department = DB::SELECT('SELECT * FROM department');
        $about = DB::SELECT('SELECT * FROM about');
        $solution = DB::SELECT('SELECT * FROM solution');
        $team = DB::SELECT('SELECT * FROM team');
        $tech = DB::SELECT('SELECT * FROM technology');
        return view('frontend.Home',
            [
                'setting' =>$setting,

                'slider' =>$slider,
                'department' =>$department,
                'about' =>$about,
                'solution' =>$solution,
                'team' =>$team,
                'tech' =>$tech,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
