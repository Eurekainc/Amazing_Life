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
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', 'FeaturedController@index');
Route::get('/about', 'AboutController@index');

//User profile routes start:
Route::get('/user', 'UserController@index');
Route::get('/user/groups', 'UserController@groups');
Route::get('/user/details', 'UserController@details');
Route::get('/user/people', 'UserController@people');
Route::get('/user/notifications', 'UserController@notifications');
//End user profile routes

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles', 'ArticlesController');
Route::resource('events', 'EventsController');
Route::resource('forums', 'ForumsController');
Route::resource('videos', 'VideosController');

