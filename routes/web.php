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

Route::get('/', 'HomeController@index');

Route::get('/p/{slug}', 'PostController@show')->name("post.show");

Route::get('/fb/{slug}', function () {
    return view('fanbase.show');
});

Route::get('/u/{slug}', function () {
    return view('fan.show');
});
