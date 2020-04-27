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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile-update', 'HomeController@update')->name('pro.update');
Route::group(['prefix' => 'admin'], function () {
    Route::get('login','AdminLoginController@login')->name('admin.login');
    Route::post('login','AdminLoginController@adminLogin')->name('admin.login.post');
    Route::get('home','AdminController@home')->name('admin.home');
    Route::get('user/{id}','AdminController@user')->name('admin.user');
});
Route::get('/services', 'UserController@services')->name('services');
Route::get('/partners', 'UserController@partners')->name('partners');
Route::get('/contact', 'UserController@contact')->name('contact');
