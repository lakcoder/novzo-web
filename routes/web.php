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

Route::get('/','PagesController@home');
Route::get('/blogs','PagesController@blogs');
Route::get('/dashboard','PagesController@dashboard');
Route::get('/exchange','PagesController@exchange');
Route::get('/exchanger','PagesController@exchanger');
Route::get('/login','PagesController@login');
Route::get('/reviews','PagesController@reviews');
Route::get('/search','PagesController@search');
Route::get('/settings','PagesController@settings');
