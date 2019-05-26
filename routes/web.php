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

Route::get('/', function () {
    return view('home');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/exchange', function () {
    return view('exchange');
});

Route::get('/exchanger', function () {
    return view('exchanger');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/settings', function () {
    return view('settings');
});
