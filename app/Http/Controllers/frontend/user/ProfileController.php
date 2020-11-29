<?php

namespace App\Http\Controllers\frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('user.dashboard');
    }
    function notVerified(){
        return view('user.error_dashboard');
    }
}
