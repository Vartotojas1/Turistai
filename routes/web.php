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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/story', 'StoryController@index');
Route::get('/story/{id}', 'StoryController@show');
Route::get('/hashtag', 'HashtagController@index');
Route::get('/hashtag/{id}', 'HashtagController@show');
Route::get('/login', 'LoginController@index');
Route::get('/register', 'RegisterController@index');

Auth::routes();
