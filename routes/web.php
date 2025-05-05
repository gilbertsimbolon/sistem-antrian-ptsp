<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ptsp\AntrianController;
use App\Http\Controllers\ptsp\MejaHukumController;
use App\Http\Controllers\ptsp\MejaInzageController;
use App\Http\Controllers\ptsp\MejaPidanaController;
use App\Http\Controllers\ptsp\MejaPerdataController;
use App\Http\Controllers\ptsp\pegawai\InzageController;
use App\Http\Controllers\ptsp\pegawai\PidanaController;
use App\Http\Controllers\ptsp\pegawai\PerdataController;
use App\Http\Controllers\ptsp\antrian\AntrianHukumController;
use App\Http\Controllers\ptsp\antrian\AntrianInzageController;
use App\Http\Controllers\ptsp\antrian\AntrianPidanaController;
use App\Http\Controllers\ptsp\antrian\AntrianPerdataController;
use App\Http\Controllers\ptsp\pegawai\HukumController;

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
    Route::post('/ptsp/antrian/store-perdata', [AntrianPerdataController::class, 'store'])->name('antrian.perdata.store');
    Route::post('/ptsp/antrian/store-hukum', [AntrianHukumController::class, 'store'])->name('antrian.hukum.store');

    // Daftar Antrian Meja Inzage
    Route::get('/ptsp/pegawai/meja-inzage', [InzageController::class, 'index'])->name('pegawai.inzage.index');

    // Daftar Antrian Meja Pidana
    Route::get('ptsp/pegawai/meja-pidana', [PidanaController::class, 'index'])->name('pegawai.pidana.index');

    // Daftar Antrian Meja Perdata
    Route::get('ptsp/pegawai/meja-perdata', [PerdataController::class, 'index'])->name('pegawai.perdata.index');

    // Daftar Antrian Meja Hukum
    Route::get('ptsp/pegawai/meja-hukum', [HukumController::class, 'index'])->name('pegawai.hukum.index');


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

    // Meja Perdata
    Route::get('/ptsp/meja-perdata', [MejaPerdataController::class, 'index'])->name('meja-perdata.index');
    Route::get('/ptsp/perdata/{id}', [MejaPerdataController::class, 'editPerdata'])->name('perdata.edit');
    Route::put('/ptsp/perdata/{id}', [MejaPerdataController::class, 'update'])->name('perdata.update');
    Route::delete('/ptsp/perdata/{id}', [MejaPerdataController::class, 'destroy'])->name('perdata.destroy');

    // Meja Hukum
    Route::get('/ptsp/meja-hukum', [MejaHukumController::class, 'index'])->name('meja-hukum.index');
    Route::get('/ptsp/hukum/{id}', [MejaHukumController::class, 'editHukum'])->name('hukum.edit');
    Route::put('/ptsp/hukum/{id}', [MejaHukumController::class, 'update'])->name('hukum.update');
    Route::delete('/ptsp/hukum/{id}', [MejaHukumController::class, 'destroy'])->name('hukum.destroy');
});

// Route untuk menampilkan antrian tertentu
Route::prefix('/ptsp/antrian')->group(function () {
    Route::get('/inzage/{id}', [AntrianInzageController::class, 'show'])->name('antrian.inzage.show');
    Route::get('/pidana/{id}', [AntrianPidanaController::class, 'show'])->name('antrian.pidana.show');
    Route::get('/perdata/{id}', [AntrianPerdataController::class, 'show'])->name('antrian.perdata.show');
    Route::get('/hukum/{id}', [AntrianHukumController::class, 'show'])->name('antrian.hukum.show');
    // Tambahkan lainnya di sini
});

// Menggunakan auth.php untuk menangani login, register, dll
require __DIR__.'/auth.php';
