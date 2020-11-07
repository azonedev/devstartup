<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class DomainHostingController extends Controller
{
     function index(){
        $serverData = DB::table('domain_hosting')->get();
        return view('admin.server.server',
            [
                'serverData'=>$serverData
            ]);
    }

    function store(Request $r){
        $server = $r->all();

        DB::table('domain_hosting')->insert($server);

        Session::flash('msg','New course lession added successfully');
        return redirect()->back();
    }


    function edit($id){
        $serverData = DB::table('domain_hosting')->get();
        $singleData = DB::table('domain_hosting')
                        ->where('id',$id)
                        ->get();
        return view('admin.server.server-edit',
            [
                'serverData'=>$serverData,
                'singleData'=>$singleData
            ]);
    }
    function update(Request $r,$id){
        
        $server = $r->all();

        DB::table('domain_hosting')
            ->where('id',$id)
            ->update($server);

        Session::flash('msg',"Domain & services updated successfully !");
        return redirect('/admin/server');
    }

    function destroy($id){
        DB::table('domain_hosting')
            ->where('id',$id)
            ->update(['status'=>'archrived']);
        Session::flash('msg',"Archrived success !");
        return redirect('/admin/server');
    }
}
