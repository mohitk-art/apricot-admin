<?php

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

Route::get('/', function () {
    return view('welcome');
});


//Auth::routes();

 Route::get('admin/dashboard', function () {
     return view('admin/index');
 });


 Route::get('admin/management', function () {
    return view('admin/management');
});

Route::get('admin/view_management', function () {
    return view('admin/view_management');
});

 

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
//       //  Route::resource('quiz', 'Admin\QuizController');
//    ;
//    Route::get('admin/dashboard', 'LoginController@index')->name('dashboard');
// });




//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//sadfasdf


// Route::get('/login',  'AuthController@loginForm')->name('login');
// Route::post('/login',  'AuthController@login');


// Route::get('/logout',  'AuthController@logout');

// Route::get('/dashboard', 'HomeController@dashboard')->middleware('auth');


 Route::group(['middleware' => ['auth','admin']], function () {


    Route::GET('admin/home', 'admin/AdminController@index');

    
 });

 Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
 Route::POST('admin', 'Admin\LoginController@login ');
 Route::get('admin/logout',  'Admin\LoginController@logout');
 
 Route::POST('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmai')->name('admin.password.email');
 Route::GET('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
 Route::POST('admin-password/reset', 'Admin\ResetPasswordController@reset');
 Route::GET('admin-password/reset/{token', 'Admin\RegisterController@showRegistrationForm')->name('admin.password.reset');

