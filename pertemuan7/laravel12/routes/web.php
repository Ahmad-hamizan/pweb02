<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/profil',
    [MahasiswaController::class, 'show']
);

Route::get('about', function () {
    return view("about");
});

Route::get('salam/{nim}/{nama}', function ($nim, $nama) {
    return "Data Mahasiswa dengan NIM $nim dan Nama $nama   " . PHP_EOL;
});

Route::get('produk', function () {
    return view('produk.index');
});

Route::get('produk/{id}', function ($id) {
    return view('produk.index', ['idproduk' => $id]);
});

Route::get('profile', function () {
    return view('profile', ['prodi' => 'Teknik Informatika']);
});

Route::get(
    'prodi',
    [ProdiController::class, 'show']
);

Route::get(
    'books',
    [BookController::class, 'index']
);

Route::get('produks', [
    ProdukController::class,
    'index'
]);
