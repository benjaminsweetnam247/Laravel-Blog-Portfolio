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
Route::get('/', function(){
    return redirect('/blog');
});
Route::resource('/blog', 'BlogController');

Route::get('/about', function() {
    return view('about.index');
});

Route::resource('/gallery', 'GalleryController');

Route::get('/contact',function() {
    return view('contact.create');
});

Route::get('/test', function() {
   $img = Image::make(url('http://www.planwallpaper.com/static/images/desktop-year-of-the-tiger-images-wallpaper.jpg'))->resize(300, 200);

    return $img->response('jpg');
});