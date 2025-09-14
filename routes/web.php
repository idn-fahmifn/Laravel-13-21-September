<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HalamanController; //controller wajib di import
use App\Http\Controllers\UmurController;
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


// memanggil function pada controller 
Route::get('halaman-index', [HalamanController::class, 'index'])-> name('halaman.index');

// controller resource
Route::resource('barang', BarangController::class);

// jika ditambah fuction
Route::get('halaman-tambahan', [BarangController::class, 'tambahan'])-> name('halaman.tambahan');

// route untuk umur
Route::get('form-umur', [UmurController::class, 'formUmur'])
->name('form.umur');

Route::get('success', [UmurController::class, 'success'])
->middleware('umur')
->name('success');

Route::post('proses', [UmurController::class,'prosesUmur'])
->name('prosses');


