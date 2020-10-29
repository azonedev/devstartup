<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
class MessageController extends Controller
{
    function index(){
        $newMessage = DB::table('dev_message')
                    ->where('status','unread')
                    ->get();

       return view('admin.messages.New',
            [
                'newMessage'=>$newMessage
            ]
        );
    }
    
    function create(){

        $allMessage = DB::table('dev_message')
                    ->get();

       return view('admin.messages.All',
            [
                'allMessage'=>$allMessage
            ]
        );

    }
    
    function read($id){

        $message = DB::table('dev_message')
                    ->where('id',$id)
                    ->get();

       return view('admin.messages.Single',
            [
                'message'=>$message
            ]
        );
        
    }

    function update($id){
        DB::update("update dev_message set status=? Where id=?",['read',$id]);        
        Session::flash('msg','mark as read successfully ');
        return redirect('/admin/new-messages');
    }
}
