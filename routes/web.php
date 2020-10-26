<?php

use Illuminate\Support\Facades\Route;


// --------------
// Frontend
// --------------


Route::get('/', 'frontend\HomeController@index');


// --------------
// Admin
// --------------

Route::group(['prefix'=>'admin', 'middleware' =>'AdminAction'],function (){

    Route::get('/',"admin\AdminController@index");

    // page settings

        // home - slider
        Route::get('/home/slider',"admin\homepage\SliderController@index");
        Route::post('/home/slider/store',"admin\homepage\SliderController@store");
        Route::post('/home/slider/edit/{id}',"admin\homepage\SliderController@edit");
        Route::post('/home/slider/update/{id}',"admin\homepage\SliderController@update");
        Route::post('/home/slider/archrive/{id}',"admin\homepage\SliderController@destroy");

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