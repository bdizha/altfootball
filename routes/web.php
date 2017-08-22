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

// Authentication Routes
Auth::routes();

Route::get('/unverified', 'Auth\RegisterController@unverified')->name("auth.unverified");
Route::get('/terms', 'AssetController@show')->name("asset.show");
Route::get('/activate/{token}', 'Auth\RegisterController@activate')->name("auth.activate");
Route::resource('profile', 'ProfileController');
Route::get('/onboard/recommended', 'WelcomeController@index')->name("recommended");
Route::get('/onboard/featured', 'WelcomeController@index')->name("featured");
Route::resource('onboard', 'WelcomeController');
Route::get('/p/{slug}', 'PostController@show')->name("post.show");
Route::get('/f/{slug}', 'FanbaseController@show')->name("fanbase.show");
Route::get('/f/{slug}/discussions', 'FanbaseController@discussions')->name("fanbase.show");
Route::get('/fanbases', 'FanbaseController@index')->name("fanbase.index");
Route::get('/fanbases/yours', 'FanbaseController@yours')->name("fanbase.yours");
Route::get('/t/{slug}', 'TagController@show')->name("tag.show");
Route::get('/u/{slug}', 'FanController@show')->name("fan.show");
Route::get('/u/{slug}/requesters', 'FanController@requesters')->name("fan.requesters");
Route::get('/u/{slug}/requested', 'FanController@requested')->name("fan.requested");
Route::post('/tackle', 'CommentController@save')->name("tackle.save");
Route::post('/follower', 'FollowerController@save')->name("follower.save");
Route::post('/fanbase', 'FanbaseController@save')->name("fanbase.save");
Route::post('/post', 'PostController@save')->name("post.save");
Route::get('/posts', 'PostController@index')->name("post.index");
Route::post('/dribble', 'DribbleController@save')->name("dribble.save");