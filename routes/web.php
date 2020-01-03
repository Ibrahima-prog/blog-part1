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

//User routes


Route::group(['namespace' => 'User'], function () {
    Route::get('/','HomeController@index');

Route::get('post/{post?}','PostController@post')->name('post');

Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('post/category/{category}','HomeController@category')->name('category');
});


//Admin routes
Route::group(['namespace' => 'Admin','middleware'], function () {
    Route::get('admin/home','HomeController@index')->name('admin.home');
    //post routes
  Route::resource('admin/post', 'PostController');
     //user routes
     Route::resource('admin/user', 'UserController');
     Route::resource('admin/role', 'RoleController');
  //tag routes
Route::resource('admin/tag', 'TagController');
//category routes
Route::resource('admin/category', 'CategoryController');
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');


});









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
