<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/berita', function () {
    return view('berita');
});