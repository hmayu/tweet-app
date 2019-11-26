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

Route::get('/', 'TweetController@index')->name('tweets.index');
// Route::get('/tweets/create', 'TweetController@create')->name('tweets.create');
Route::resource('tweets', 'TweetController', ['only' => ['index', 'create', 'store']]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
