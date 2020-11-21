<?php

use Illuminate\Support\Facades\Route;

// --------------
// Frontend
// --------------

Route::get('/', 'frontend\HomeController@index');
Route::get('/home-single-{page}', 'frontend\HomeSingleController@index');
Route::get('/dept/development', 'frontend\DevelopmentController@index');
Route::post('/dept/development/save', 'frontend\DevelopmentController@store');

// frontend - course

Route::get('/all-course', 'frontend\CourseController@index');
Route::get('/enroll-course-{id}', 'frontend\CourseController@enroll');
Route::post('/enroll-save', 'frontend\CourseController@enrollSave');
Route::get('/details-course-{id}', 'frontend\CourseController@details');

// doamin&hosting
Route::get('/domain-hosting','frontend\ServiceController@index');

// solution 
Route::get('/solution/{name}-{id}','frontend\SolutionController@index');

// check certificate
Route::get('/check-mjcid/','frontend\CerController@index');
Route::get('/check-mjcid/view','frontend\CerController@view');

// video lession
route::get('/video-lession','admin\VideoController@videoLession');
route::get('/video-lession/{name}-{id}','admin\VideoController@videoLessionSingle');

// blog

route::get('/blog','frontend\BlogController@index');
route::get('/blog/{slug}/{id}','frontend\BlogController@single');
route::get('/category/blog/{cat_name}','frontend\BlogController@category');
route::get('/blog/writers','frontend\BlogController@authAll');
route::get('/blog/category','frontend\BlogController@categoryAll');
route::get('/blog/writer/{username}/{id}','frontend\BlogController@authSingle');

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

        // video
        
        //video-category
        Route::get('/video-category','admin\VideoController@indexCat');
        Route::post('/video-category/store','admin\VideoController@storeCat');
        Route::post('/video-category/edit/{id}','admin\VideoController@editCat');
        Route::post('/video-category/update/{id}','admin\VideoController@updateCat');
        Route::post('/video-category/archrive/{id}','admin\VideoController@destroyCat');

        //video-lession
        Route::get('/video-lession','admin\VideoController@index');
        Route::post('/video-lession/store','admin\VideoController@store');
        Route::post('/video-lession/edit/{id}','admin\VideoController@edit');
        Route::post('/video-lession/update/{id}','admin\VideoController@update');
        Route::post('/video-lession/archrive/{id}','admin\VideoController@destroy');

        // student-management

        // blog category
        Route::post('/blog-cat/save','admin\BlogController@catSave');
        Route::get('/blog-cat/destroy/{id}','admin\BlogController@catDestroy');

        // blog post
        Route::get('/blog','admin\BlogController@index');
        Route::post('/blog/store','admin\BlogController@store');
        Route::post('/blog/edit/{id}','admin\BlogController@edit');
        Route::post('/blog/update/{id}','admin\BlogController@update');
        Route::post('/blog/destroy/{id}','admin\BlogController@destroy');

        // certifiate management
        Route::get('/cer','admin\certificate@index');
        Route::post('/cer/store/','admin\certificate@store');
        Route::post('/cer/edit/{id}','admin\certificate@edit');
        Route::put('/cer/update/{id}','admin\certificate@update');
        Route::post('/cer/archrive/{id}','admin\certificate@destroy');

        // Domain & Hosting

        Route::get('/server','admin\DomainHostingController@index');
        Route::post('/server/store/','admin\DomainHostingController@store');
        Route::post('/server/edit/{id}','admin\DomainHostingController@edit');
        Route::post('/server/update/{id}','admin\DomainHostingController@update');
        Route::post('/server/archrive/{id}','admin\DomainHostingController@destroy');
        
        // user [admin-list]
        Route::get('/admin-list',"admin\AdminUserShow@index");
        Route::get('/admin-list/delete/{id}',"admin\AdminUserShow@destroy");

        // user [admin-add]
        Route::get('/add-new',"admin\AdminUserShow@create");
        Route::post('/add-new/update/{id}',"admin\AdminUserShow@update");
        
        // user [normal-user-list]
        Route::get('/user-list',"admin\AdminUserShow@show");
        // css 
        route::get('/css','admin\CustomCSS@index');
        route::post('/css/update','admin\CustomCSS@update');
        // settings 
        Route::get('/setting',"admin\SettingController@edit");
        Route::post('/setting/update/{id}',"admin\SettingController@update");

});

// --------------
// User
// --------------

// user login & reg

Route::get('/register',"user\GeneralUser@index");
Route::post('/register/save',"user\GeneralUser@store");

Route::get('/login/{url?}',"user\GeneralUser@showLogin");
Route::post('/login/match',"user\GeneralUser@matchLogin");
Route::get('/logout',"user\GeneralUser@logout");
                                                                                        
// all-user-action

Route::group(['prefix' => 'user','middleware' =>'UserAction'], function () {

});