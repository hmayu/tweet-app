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

Auth::routes();
Route::get('/', 'TweetController@index')->name('tweets.index');
Route::resource('tweets', 'TweetController', ['only' => ['index', 'create', 'store','show','edit','update']]);
Route::get('/home', 'TweetController@index')->name('home');

