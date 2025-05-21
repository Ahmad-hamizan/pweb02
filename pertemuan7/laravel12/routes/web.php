<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');

Route::get(
    '/books',
    [BookController::class, 'index']
);

Route::get(
    'books/create',
    [BookController::class, 'create']
);

Route::post(
    'books/store',
    [BookController::class, 'store']
);