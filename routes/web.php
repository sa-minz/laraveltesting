<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::view('/about', 'about');
Route::view('/mission', 'mission');
Route::view('/choose', 'choose');
Route::view('/search', 'search');
Route::view('/login', 'login');
