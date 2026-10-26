<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
})->name('home');

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
    ]);
})->name('home.index');

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
        'name' => 'Fania',
        'nim' => '13242520030',
        'prodi' => 'Teknologi Informasi',
        'gambar' => 'H2r.jpg',
    ]);
})->name('profile');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita.show');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'contact',
    ]);
})->name('contact');
