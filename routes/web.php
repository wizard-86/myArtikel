<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/help', function () {
    return view('help');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route::resource('artikel', ArtikelController::class)
//     ->only(['index', 'show']);

// Route::resource('artikel', ArtikelController::class)
//     ->except(['index', 'show'])
//     ->middleware('auth.custom');

Route::resource('artikel', ArtikelController::class);


// Public
// Route::get('/artikel', [ArtikelController::class, 'index'])
//     ->name('artikel.index');

// Route::get('/artikel/{artikel}', [ArtikelController::class, 'show'])
//     ->name('artikel.show');

// Protected
// Route::middleware('auth.custom')->group(function () {

//     Route::get('/artikel/create', [ArtikelController::class, 'create'])
//         ->name('artikel.create');

//     Route::post('/artikel', [ArtikelController::class, 'store'])
//         ->name('artikel.store');

//     Route::get('/artikel/{artikel}/edit', [ArtikelController::class, 'edit'])
//         ->name('artikel.edit');

//     Route::put('/artikel/{artikel}', [ArtikelController::class, 'update'])
//         ->name('artikel.update');

//     Route::delete('/artikel/{artikel}', [ArtikelController::class, 'destroy'])
//         ->name('artikel.destroy');

// });


// tambah gambar untuk artikel
// tambah sistem login dan register


// Upload File
// Auth
// Middleware
// Relationship Database