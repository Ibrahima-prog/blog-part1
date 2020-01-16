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

use App\Events\TaskEvent;
use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use App\Notifications\TaskCompleted;
use App\User;
use Illuminate\Support\Facades\Mail;

Route::group(['namespace' => 'User'], function () {
    Route::get('/','HomeController@index');
    Route::get('/home1','HomeController@index');

Route::get('post/{post?}','PostController@post')->name('post');

Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
Route::get('post/category/{category}','HomeController@category')->name('category');

//vue routes

Route::post('getPosts','PostController@getAllPosts');
Route::post('saveLike','PostController@saveLike');


});


//Admin routes
Route::group(['namespace' => 'Admin','middleware'], function () {


    Route::get('admin/home','HomeController@index')->name('admin.home');

    //post routes
  Route::resource('admin/post', 'PostController');
     //user routes
     Route::resource('admin/user', 'UserController');
     // role route
     Route::resource('admin/role', 'RoleController');
  // role route
  Route::resource('admin/permission', 'PermissionController');
  //tag routes
Route::resource('admin/tag', 'TagController');
//category routes
Route::resource('admin/category', 'CategoryController');
Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin-login', 'Auth\LoginController@login');


});









Auth::routes();
Route::get('/event', function()
{
    event(new TaskEvent('how are u?'));
});
Route::get('/listen', function()
{
    return view('listenBroadcast');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form/{lang?}', 'HomeController@form');
Route::get('sendEmail', function(){
    SendEmailJob::dispatch()
    ->delay(now()->addSeconds(5));

        return 'email sent';
});
Route::post('/form', 'HomeController@store');

Route::get('/search/{searchkey}', 'HomeController@search');

Route::get('/', function()
{

    $user=User::find(1);
    //$when = now()->addSeconds(10);
/*foreach ($user->notifications as $not) {
 echo $not->data['data'];
}*/
User::find(1)->notify(new TaskCompleted);
/*Notification::route('mail', 'taylor@example.com')

            ->notify(new TaskCompleted());*/
    return view('home',compact('user'));
});
Route::get('mark', function()
{
User::find(1)->unreadNotifications->markAsRead();
return redirect()->back();
})->name('mark');
