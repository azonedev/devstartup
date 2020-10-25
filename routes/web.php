<?php

use Illuminate\Support\Facades\Route;


// --------------
// Frontend
// --------------


Route::get('/', function(){
    return view('frontend.Home-master');
});


// --------------
// Admin
// --------------

Route::group(['prefix'=>'admin', 'middleware' =>'AdminAction'],function (){

    Route::get('/',"admin\AdminController@index");

});

// --------------
// User
// --------------

// user login & reg

// Route::get('/register',"user\UserController@index");
// Route::post('/register/save',"user\UserController@store");

// Route::get('/login/{url?}',"user\UserController@showLogin");
// Route::post('/login/match',"user\UserController@matchLogin");
// Route::get('/logout',"user\UserController@logout");
                                                                                        
// all-user-action

Route::group(['prefix' => 'user','middleware' =>'UserAction'], function () {

});