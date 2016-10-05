<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/about-us', function () {
    return view('about-us');
});
