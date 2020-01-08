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

Route::get('/','FrontEnd\HomeController@index')->name('home');

Route::get('blog','FrontEnd\HomeController@blog')->name('blog');
Route::get('about','FrontEnd\HomeController@about')->name('about');
Route::get('contact','FrontEnd\HomeController@contact')->name('contact');