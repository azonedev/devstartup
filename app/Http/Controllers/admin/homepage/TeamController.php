<?php

namespace App\Http\Controllers\admin\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class TeamController extends Controller
{
     public function index()
    {
        $teamData = DB::SELECT('SELECT * FROM team');
        return view('admin.pages.Home-team',
            [
                'teamData'=>$teamData
            ]    
        );
    }

    public function store(Request $r)
    {

        $team = [];

        $team['name'] = $r->input('name');
        $team['title'] = $r->input('title');
        $team['facebook'] = $r->input('facebook');
        $team['linkedin'] = $r->input('linkedin');
        $team['twitter'] = $r->input('twitter');
        $team['contact'] = $r->input('contact');

        $image = $r->file('image');

        // image 
        $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
        $path = public_path('assets/app-images'); //store path
        $image->move($path,$image_name); //file store 
        $team['img'] = 'assets/app-images/'.$image_name; //save on DB

        DB::table('team')->insert($team);

        Session::flash('msg','New team added successfully');

        return redirect('/admin/home/team');

    }

    public function edit($id,Request $r)
    {
        $teamData = DB::SELECT('SELECT * FROM team');
        $singleData = DB::SELECT('select * from team where id=?',[$id]);
        return view('admin.pages.Home-team-edit',
            [
                'teamData'=>$teamData,
                'singleData' => $singleData
            ]    
        );
    }

    public function update(Request $r, $id)
    {
        $team = [];

        $team['name'] = $r->input('name');
        $team['title'] = $r->input('title');
        $team['facebook'] = $r->input('facebook');
        $team['linkedin'] = $r->input('linkedin');
        $team['twitter'] = $r->input('twitter');
        $team['contact'] = $r->input('contact');

        $image = $r->file('image');

        if($image != NULL){
            // image 
            $image_name =  time() . '.' . $image->getClientOriginalExtension(); //file name
            $path = public_path('assets/app-images'); //store path
            $image->move($path,$image_name); //file store 
            $team['img'] = 'assets/app-images/'.$image_name; //save on DB
        }else{
            $team['img'] = $r->input('prev-img');
        }


        $team['status'] = $r->input('status');

        DB::table('team')
            ->where('id',$id)
            ->update($team);

        Session::flash('msg','team updated successfully !');
        
        return redirect('/admin/home/team');
    }

    
    public function destroy($id)
    {
        
        DB::update('update team set status = "archrived" where id = ?', [$id]);
        
        Session::flash('msg','team archrived successfully !');
        
        return redirect('/admin/home/team');
    }
}
