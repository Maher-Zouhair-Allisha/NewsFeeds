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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group( ['middleware' => ['auth' ,'Check'] ] , function (){

Route::get('teenagers' , 'CheckAgeController@teenagers')->name('teenagers');

});

Route::get('site' , 'AdminController@site')->middleware('auth')->name('site');
Route::get('admin' , 'AdminController@adminadmin')->middleware('auth:admin')->name('here.admin');


Route::group( ['prefix'=> 'admin' , 'namespace' => 'Auth' ] , function (){


    Route::get('/login','AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

