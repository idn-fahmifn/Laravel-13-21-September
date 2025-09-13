<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// membuat route dasar
// method get, untuk menampilkan atau memanggil data.
Route::get('asep', function () {
    return "Ini adalah respon text ketika asep dipanggil";
})->name('halaman.asep');

// Route dengan parameter.
// parameter wajib diisi
Route::get('mobil/{merek}', function ($mobil) {
    return "Hallo saya punya mobil " . $mobil;
})->name('param eter-mobil');

// opsional parameter
Route::get('motor/{merek?}', function ($motor = 'Honda') {
    return "Hallo saya punya motor " . $motor;
});


Route::get('tentang', function () {
    return view('halaman.tentang');
})->name('tentang');

// group pada route laravel
// prefix atau middleware

Route::prefix('training')->group(function () {

    Route::get('laravel', function () {
        return "Hallo saya sedang belajar laravel ";
    })->name('laravel');

    // prefix kedua yang ada di dalam grup network
    Route::prefix('network')->group(function () {
        Route::get('mtcna', function () {
            return "Hallo saya sedang belajar MTCNA ";
        })->name('mtcna');

        Route::get('halaman-utama', function () {
            return view('halaman.halaman-utama');
        })->name('utama');
    });

});

