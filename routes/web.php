<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PageController@home')->name('home');

Route::resource('welcome', 'CompController');
Auth::routes();
Route::get('logout', function(){
    Auth::logout(); // logout user
    return Redirect::to('/');
});

Route::get('/home', 'HomeController@index');
