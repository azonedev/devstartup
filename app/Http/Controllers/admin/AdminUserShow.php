<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class AdminUserShow extends Controller
{
    
    public function index()
    {
        $adminList = DB::SELECT("SELECT * FROM users WHERE role = ?",["admin"]);
        return view('admin.user.admin-list',
        [
            'adminList'=>$adminList
        ]);
    }


    public function create()
    {
        $users = DB::SELECT("SELECT * FROM users ");
        return view('admin.user.admin-add',
        [
            'users'=>$users
        ]);
    }


    
    public function show()
    {
        $userList = DB::SELECT("SELECT * FROM users WHERE role = ?",["user"]);
        return view('admin.user.user-list',
        [
            'userList'=>$userList
        ]);
    }


    public function update(Request $r, $id)
    {
        $role  = $r->input('role');
        
        DB::UPDATE("UPDATE users SET role=? WHERE id=?",[$role,$id]);
        Session::flash('msg','User Role Updated Successfully !');
        return redirect('/admin/add-new');
    }


    public function destroy($id)
    {
        DB::DELETE("DELETE FROM users WHERE id=?",[$id]);
        Session::flash('msg','User Delete Successfully !');
        return redirect()->back();
    }
}
