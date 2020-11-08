<?php

use Illuminate\Support\Facades\Route;


// --------------
// Frontend
// --------------


Route::get('/', 'frontend\HomeController@index');
Route::get('/home-single-{page}', 'frontend\HomeSingleController@index');
Route::get('/dept/development', 'frontend\DevelopmentController@index');
Route::post('/dept/development/save', 'frontend\DevelopmentController@store');



// --------------
// Admin
// --------------

Route::group(['prefix'=>'admin', 'middleware' =>'AdminAction'],function (){

    Route::get('/',"admin\AdminController@index");

    // message 
        
        Route::get('/new-messages',"admin\MessageController@index");
        Route::get('/message/{id}',"admin\MessageController@read");
        Route::get('/message/update/{id}',"admin\MessageController@update");
        Route::get('/all-messages',"admin\MessageController@create");

    // page settings

        // home - slider
        Route::get('/home/slider',"admin\homepage\SliderController@index");
        Route::post('/home/slider/store',"admin\homepage\SliderController@store");
        Route::post('/home/slider/edit/{id}',"admin\homepage\SliderController@edit");
        Route::post('/home/slider/update/{id}',"admin\homepage\SliderController@update");
        Route::post('/home/slider/archrive/{id}',"admin\homepage\SliderController@destroy");

        // home - department
        Route::get('/home/dept',"admin\homepage\DepartmentController@index");
        Route::post('/home/dept/store',"admin\homepage\DepartmentController@store");
        Route::post('/home/dept/edit/{id}',"admin\homepage\DepartmentController@edit");
        Route::post('/home/dept/update/{id}',"admin\homepage\DepartmentController@update");
        Route::post('/home/dept/archrive/{id}',"admin\homepage\DepartmentController@destroy");

        // home - aboutcompany
        Route::get('/home/about',"admin\homepage\AboutController@index");
        Route::post('/home/about/update/{id}',"admin\homepage\AboutController@update");

        // home - solution
        Route::get('/home/solution',"admin\homepage\SolutionController@index");
        Route::post('/home/solution/store',"admin\homepage\SolutionController@store");
        Route::post('/home/solution/edit/{id}',"admin\homepage\SolutionController@edit");
        Route::post('/home/solution/update/{id}',"admin\homepage\SolutionController@update");
        Route::post('/home/solution/archrive/{id}',"admin\homepage\SolutionController@destroy");

        // home - team
        Route::get('/home/team',"admin\homepage\TeamController@index");
        Route::post('/home/team/store',"admin\homepage\TeamController@store");
        Route::post('/home/team/edit/{id}',"admin\homepage\TeamController@edit");
        Route::post('/home/team/update/{id}',"admin\homepage\TeamController@update");
        Route::post('/home/team/archrive/{id}',"admin\homepage\TeamController@destroy");

        // home - TechnologyController
        Route::get('/home/technology',"admin\homepage\Technology@index");
        Route::post('/home/technology/store',"admin\homepage\Technology@store");
        Route::post('/home/technology/edit/{id}',"admin\homepage\Technology@edit");
        Route::post('/home/technology/update/{id}',"admin\homepage\Technology@update");
        Route::post('/home/technology/archrive/{id}',"admin\homepage\Technology@destroy");


        // Teacher

        Route::get('/teacher','admin\course\TeacherController@index');
        Route::post('/teacher/store/','admin\course\TeacherController@store');
        Route::post('/teacher/edit/{id}','admin\course\TeacherController@edit');
        Route::post('/teacher/update/{id}','admin\course\TeacherController@update');
        Route::post('/teacher/archrive/{id}','admin\course\TeacherController@destroy');

        // add course

        Route::get('/course','admin\course\AddCourseController@index');
        Route::post('/course/store/','admin\course\AddCourseController@store');
        Route::post('/course/edit/{id}','admin\course\AddCourseController@edit');
        Route::post('/course/update/{id}','admin\course\AddCourseController@update');
        Route::post('/course/archrive/{id}','admin\course\AddCourseController@destroy');

        // add course outline

        Route::get('/outline','admin\course\OutlineController@index');
        Route::post('/outline/store/','admin\course\OutlineController@store');
        Route::post('/outline/edit/{id}','admin\course\OutlineController@edit');
        Route::put('/outline/update/{id}','admin\course\OutlineController@update');
        Route::post('/outline/archrive/{id}','admin\course\OutlineController@destroy');

        // Domain & Hosting

        Route::get('/server','admin\DomainHostingController@index');
        Route::post('/server/store/','admin\DomainHostingController@store');
        Route::post('/server/edit/{id}','admin\DomainHostingController@edit');
        Route::post('/server/update/{id}','admin\DomainHostingController@update');
        Route::post('/server/archrive/{id}','admin\DomainHostingController@destroy');
        
        // settings 
        Route::get('/setting',"admin\SettingController@edit");
        Route::post('/setting/update/{id}',"admin\SettingController@update");

});

// --------------
// User
// --------------

// user login & reg

Route::get('/register',"user\UserController@index");
Route::post('/register/save',"user\UserController@store");

Route::get('/login/{url?}',"user\UserController@showLogin");
Route::post('/login/match',"user\UserController@matchLogin");
Route::get('/logout',"user\UserController@logout");
                                                                                        
// all-user-action

Route::group(['prefix' => 'user','middleware' =>'UserAction'], function () {

});