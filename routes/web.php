<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MejaPidanaController;
use App\Http\Controllers\ptsp\AntrianController;
use App\Http\Controllers\ptsp\DaftarAntrianController;
use App\Http\Controllers\ptsp\MejaInzageController;
use App\Http\Controllers\ptsp\pegawai\InzageController;
use Illuminate\Support\Facades\Route;


// Halaman Login
Route::get('/', function () {
    return view('auth.login');
});

// Halaman Home (dengan middleware auth dan verified)
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

// Grup Route yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    // Antrian PTSP
    Route::get('/ptsp/antrian', [AntrianController::class, 'index'])->name('antrian.index');
    Route::post('/ptsp/antrian/store-inzage', [AntrianController::class, 'storeInzage'])->name('antrian.inzage.store');

    // Daftar Antrian MejaInzage
    Route::get('/ptsp/pegawai/meja-inzage', [InzageController::class, 'index'])->name('pegawai.inzage.index');

    // Meja Inzage
    Route::get('/ptsp/meja-inzage', [MejaInzageController::class, 'index'])->name('meja-inzage.index');
    Route::get('/ptsp/inzage/{id}', [MejaInzageController::class, 'editInzage'])->name('inzage.edit');
    Route::put('/ptsp/inzage/{id}', [MejaInzageController::class, 'update'])->name('inzage.update');
    Route::delete('/ptsp/inzage/{id}', [MejaInzageController::class, 'destroy'])->name('inzage.destroy');
});

// Route untuk menampilkan antrian tertentu
Route::get('/ptsp/antrian/show/{id}', [AntrianController::class, 'showInzage'])->name('antrian.inzage.show');

// Menggunakan auth.php untuk menangani login, register, dll
require __DIR__.'/auth.php';
