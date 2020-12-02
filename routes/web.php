<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('Front')->group(function () {
    Route::get('/', 'HomepageController@index')->name('front.homepage');
    Route::get('/cat/{id}', 'CourseController@cat')->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}', 'CourseController@show')->name('front.show');
    Route::get('/contact', 'ContacteController@index')->name('front.contact');

    Route::post('/message/newslettter', 'MessageController@newslettter')->name('front.message.newslettter');
    Route::post('/message/contact', 'MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll', 'MessageController@enroll')->name('front.message.enroll');

    //for real time search
    Route::get('/courses', 'CourseController@getCourses')->name('front.getCourses');
    Route::get('/courses/search', 'CourseController@search')->name('front.search');
});

Route::namespace('Admin')->prefix('dashboard')->group(function () {
    Route::get('/login', 'AuthController@login')->name('admin.login');

    Route::get('login/github', 'AuthController@redirectToProvider')->name('admin.login.redirectToProvider');
    Route::get('login/github/callback', 'AuthController@handleProviderCallback')->name('admin.login.handleProviderCallback');

    Route::group(['middleware' => ['admin']], function () {

        Route::get('/cats', 'CatController@index')->name('admins.cat.index');
        Route::get('/cats/create', 'CatController@create')->name('admins.cat.create');
        Route::post('/cats/store', 'CatController@store')->name('admins.cat.store');
        Route::get('/cats/edit/{id}', 'CatController@edit')->name('admins.cat.edit');
        Route::post('/cats/update', 'CatController@update')->name('admins.cat.update');
        Route::get('/cats/delete/{id}', 'CatController@delete')->name('admins.cat.delete');



        Route::get('/trainers', 'TrainerController@index')->name('admins.trainers.index');
        Route::get('/trainers/create', 'TrainerController@create')->name('admins.trainers.create');
        Route::post('/trainers/store', 'TrainerController@store')->name('admins.trainers.store');
        Route::get('/trainers/edit/{id}', 'TrainerController@edit')->name('admins.trainers.edit');
        Route::post('/trainers/update', 'TrainerController@update')->name('admins.trainers.update');
        Route::get('/trainers/delete/{id}', 'TrainerController@delete')->name('admins.trainers.delete');


        Route::get('/students', 'StudentController@index')->name('admins.students.index');
        Route::get('/students/create', 'StudentController@create')->name('admins.students.create');
        Route::post('/students/store', 'StudentController@store')->name('admins.students.store');
        Route::get('/students/edit/{id}', 'StudentController@edit')->name('admins.students.edit');
        Route::post('/students/update', 'StudentController@update')->name('admins.students.update');
        Route::get('/students/delete/{id}', 'StudentController@delete')->name('admins.students.delete');
        Route::get('/students/show/{id}', 'StudentController@show')->name('admins.students.show');
        Route::get('/students/{id}/courses/{c_id}/approve', 'StudentController@approve')->name('admins.students.approve');
        Route::get('/students/{id}/courses/{c_id}/reject', 'StudentController@reject')->name('admins.students.reject');
        Route::get('/students/{id}/add', 'StudentController@add')->name('admins.students.add');
        Route::post('/students/{id}/add', 'StudentController@storeAdd')->name('admins.students.storeAdd');


        Route::get('/courses', 'CourseController@index')->name('admins.courses.index');
        Route::get('/courses/create', 'CourseController@create')->name('admins.courses.create');
        Route::post('/courses/store', 'CourseController@store')->name('admins.courses.store');
        Route::get('/courses/edit/{id}', 'CourseController@edit')->name('admins.courses.edit');
        Route::post('/courses/update', 'CourseController@update')->name('admins.courses.update');
        Route::get('/courses/delete/{id}', 'CourseController@delete')->name('admins.courses.delete');

        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
    });
    Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
});
