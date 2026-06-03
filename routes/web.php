<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});


Route::resource('artikel', ArtikelController::class);


// tambah gambar untuk artikel
// tambah sistem login dan register


// Upload File
// Auth
// Middleware
// Relationship Database