<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class SliderController extends Controller
{

    public function index()
    {
        $sliderData = DB::SELECT('SELECT * FROM slider');
        return view('admin.pages.Home-slider',
            [
                'sliderData'=>$sliderData
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

        DB::INSERT("INSERT INTO slider
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

        Session::flash('msg','New slider added successfully');

        return redirect('/admin/home/slider');

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
