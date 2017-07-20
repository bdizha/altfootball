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
Route::get('/fb/{slug}', 'FanbaseController@show')->name("fanbase.show");
Route::get('/fanbases', 'FanbaseController@index')->name("fanbase.index");
Route::get('/t/{slug}', 'TagController@show')->name("tag.show");
Route::get('/u/{slug}', 'FanController@show')->name("fan.show");
