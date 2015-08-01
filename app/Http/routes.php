<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Intervention\Image\Facades\Image;

Route::get('/', function(){
    return redirect('/blog');
});
Route::get('/home', function(){
    return redirect('/blog');
});

Route::resource('/blog', 'BlogController');

Route::get('/about', function() {
    return view('about.index');
});

Route::resource('/gallery', 'GalleryController');

Route::resource('/contact', 'MailController');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('*', function() {
    return redirect('/');
});