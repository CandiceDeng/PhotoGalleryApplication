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
//Registration controller
Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

//PhotoGallery(index) page
Route::get('/gallery', function () {
    return view('gallery');
});

//Session related actions controller (sign in / sign out)
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/', function () {
    return view('welcome');
});
