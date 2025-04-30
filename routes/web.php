<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ptsp\AntrianController;
use App\Http\Controllers\ptsp\MejaInzageController;
use App\Http\Controllers\ptsp\MejaPidanaController;
use App\Http\Controllers\ptsp\DaftarAntrianController;
use App\Http\Controllers\ptsp\pegawai\InzageController;


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
    Route::post('/ptsp/antrian/store-pidana', [AntrianController::class, 'storePidana'])->name('antrian.pidana.store');

    // Daftar Antrian Meja Inzage
    Route::get('/ptsp/pegawai/meja-inzage', [InzageController::class, 'index'])->name('pegawai.inzage.index');

    // Daftar Antrian Meja Pidana
    Route::get('ptsp/pegawai/meja-pidana', [Pidana])

    // Meja Inzage
    Route::get('/ptsp/meja-inzage', [MejaInzageController::class, 'index'])->name('meja-inzage.index');
    Route::get('/ptsp/inzage/{id}', [MejaInzageController::class, 'editInzage'])->name('inzage.edit');
    Route::put('/ptsp/inzage/{id}', [MejaInzageController::class, 'update'])->name('inzage.update');
    Route::delete('/ptsp/inzage/{id}', [MejaInzageController::class, 'destroy'])->name('inzage.destroy');

    // Meja Pidana
    Route::get('/ptsp/meja-pidana', [MejaPidanaController::class, 'index'])->name('meja-pidana.index');
    Route::get('/ptsp/pidana/{id}', [MejaPidanaController::class, 'editPidana'])->name('pidana.edit');
    Route::put('/ptsp/pidana/{id}', [MejaPidanaController::class, 'update'])->name('pidana.update');
    Route::delete('/ptsp/pidana/{id}', [MejaPidanaController::class, 'destroy'])->name('pidana.destroy');
});

// Route untuk menampilkan antrian tertentu
Route::get('/ptsp/antrian/show/{id}', [AntrianController::class, 'showInzage'])->name('antrian.inzage.show');
Route::get('/ptsp/antrian/show/{id}', [AntrianController::class, 'showPidana'])->name('antrian.pidana.show');

// Menggunakan auth.php untuk menangani login, register, dll
require __DIR__.'/auth.php';
