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

Route::get('/', 'FrontendController@welcome')->name('welcome');

Route::get('about', 'FrontendController@about')->name('about');
Route::get('contact', 'FrontendController@contact')->name('contact');
Route::get('about', 'FrontendController@about')->name('about');

Auth::routes();


// Admin Route Here...................................

Route::group(['as'=>'admin.', 'prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	 Route::resource('post', 'PostController');
});

// Stuents Route Here...................................

Route::group(['as'=>'student.', 'prefix'=>'student', 'namespace'=>'Student', 'middleware'=>['auth', 'student']], function(){

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	// Route::resource('post', 'PostController');
});