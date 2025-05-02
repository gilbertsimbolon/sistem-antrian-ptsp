<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ptsp\AntrianController;
use App\Http\Controllers\ptsp\MejaInzageController;
use App\Http\Controllers\ptsp\MejaPidanaController;
use App\Http\Controllers\ptsp\pegawai\InzageController;
use App\Http\Controllers\ptsp\pegawai\PidanaController;
use App\Http\Controllers\ptsp\antrian\AntrianInzageController;
use App\Http\Controllers\ptsp\antrian\AntrianPidanaController;

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
    Route::post('/ptsp/antrian/store-inzage', [AntrianInzageController::class, 'store'])->name('antrian.inzage.store');
    Route::post('/ptsp/antrian/store-pidana', [AntrianPidanaController::class, 'store'])->name('antrian.pidana.store');

    // Daftar Antrian Meja Inzage
    Route::get('/ptsp/pegawai/meja-inzage', [InzageController::class, 'index'])->name('pegawai.inzage.index');

    // Daftar Antrian Meja Pidana
    // Route::get('ptsp/pegawai/meja-pidana', [PidanaController::class, 'index'])->name('pegawai.pidana.index');

    // Meja Inzage
    Route::get('/ptsp/meja-inzage', [MejaInzageController::class, 'index'])->name('meja-inzage.index');
    Route::get('/ptsp/inzage/{id}', [MejaInzageController::class, 'editInzage'])->name('inzage.edit');
    Route::put('/ptsp/inzage/{id}', [MejaInzageController::class, 'update'])->name('inzage.update');
    Route::delete('/ptsp/inzage/{id}', [MejaInzageController::class, 'destroy'])->name('inzage.destroy');

});

// Route untuk menampilkan antrian tertentu
Route::prefix('/ptsp/antrian')->group(function () {
    Route::get('/inzage/{id}', [AntrianInzageController::class, 'show'])->name('antrian.inzage.show');
    Route::get('/pidana/{id}', [AntrianPidanaController::class, 'show'])->name('antrian.pidana.show');
    // Tambahkan lainnya di sini
});

// Menggunakan auth.php untuk menangani login, register, dll
require __DIR__.'/auth.php';
