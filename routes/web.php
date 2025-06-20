<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/about', 'about');
Route::view('/mission', 'mission');
Route::view('/choose', 'choose');
Route::view('/search', 'search');
Route::view('/privacy', 'privacy');
Route::view('/terms', 'terms');
Route::view('/contact', 'contact');
Route::get('/login',function() {
    return view('login');
})->name('login');

Route::get('/sign', function () {
    return view('sign'); // or your sign-in page
})->name('sign');

