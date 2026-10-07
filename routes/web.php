<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home.index');

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'Faizal',
        'nim' => '13242520020',
        'prodi' => 'Teknologi Informasi',
        'image' => 'images/zntsu.png',
    ]);
})->name('profile');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/berita', function () {
    return view('berita', ['beritas' => Berita::all()]);
})->name('berita');

Route::get('/berita/{berita}', function (Berita $berita) {
    return view('berita-tunggal', ['berita' => $berita]);
})->name('berita.show');
