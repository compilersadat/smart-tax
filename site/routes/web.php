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
Route::get('/files', 'HomeController@files')->name('files');
Route::get('/location', 'HomeController@location')->name('location');
Route::get('/locationy', 'HomeController@locationy')->name('locationy');
Route::get('/locationz', 'HomeController@locationz')->name('locationz');
Route::get('/locationo', 'HomeController@locationo')->name('locationo');
Route::get('/notes', 'HomeController@Notes')->name('notes');

Route::get('/d-file/{file}', 'HomeController@Down')->name('d.file');

Route::get('/notes/create','NotesController@create')->name('notes.create');
Route::post('/notes/post-create','NotesController@store')->name('notes.store');

Route::get('/notes/edit/{id}','NotesController@edit')->name('notes.edit');
Route::post('/notes/post-edit/{id}','NotesController@update')->name('notes.update');

Route::get('/location-file/{type}', 'HomeController@filesByLocation')->name('location-file');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile-update', 'HomeController@update')->name('pro.update');
Route::post('/document-upload', 'HomeController@uploadDoc')->name('doc.upload');

Route::group(['prefix' => 'admin'], function () {
    Route::get('login','AdminLoginController@login')->name('admin.login');
    Route::post('login','AdminLoginController@adminLogin')->name('admin.login.post');
    Route::get('home','AdminController@home')->name('admin.home');
    Route::get('user/{id}','AdminController@user')->name('admin.user');
    Route::get('files/{id}/{loc}','AdminController@files')->name('admin.files');
    Route::get('upload-file/{id}/{loc}','AdminController@getUpload')->name('admin.get.upload');
    Route::post('/document-upload', 'AdminController@uploadDoc')->name('admin.doc.upload');
    Route::get('/document-delete/{id}', 'AdminController@delete')->name('admin.doc.del');
    
     Route::get('document-file/{file}','AdminController@Doenf')->name('admin.d.f');
});
Route::get('/services', 'UserController@services')->name('services');
Route::get('/partners', 'UserController@partners')->name('partners');
Route::get('/contactus', 'UserController@contactus')->name('contact');
Route::post('/mail', 'UserController@mail')->name('mail');
Route::get('/whyshprofessional', 'UserController@shprofessional')->name('shprofessional');
