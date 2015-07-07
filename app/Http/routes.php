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
Route::get('/', function() {
    return redirect('/blog');
});

Route::resource('blog', 'ArticlesController');

Route::get('about', 'AboutController@index');

Route::resource('gallery', 'GalleryController');

Route::resource('mail', 'SendController');

Route::resource('contact', 'ContactController');

Route::get('home', function() {
   return redirect('/blog');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Route::get('*', 'ArticlesController@index');