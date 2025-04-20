<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MejaPidanaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ptsp\AntrianController;
use App\Http\Controllers\ptsp\DaftarAntrianController;
use App\Http\Controllers\ptsp\MejaInzageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/ptsp/antrian', [AntrianController::class, 'index'])->name('antrian.index');
    Route::get('/ptsp/daftar-antrian', [DaftarAntrianController::class, 'index'])->name('daftar.antrian.index');
    Route::get('/ptsp/meja-inzage', [MejaInzageController::class, 'index'])->name('meja-inzage.index');
    Route::post('/ptsp/antrian/store-inzage', [AntrianController::class, 'storeInzage'])->name('antrian.inzage.store');
    Route::get('/ptsp/inzage/{id}', [MejaInzageController::class, 'editInzage'])->name('inzage.edit');
    Route::put('/ptsp/inzage/{id}', [MejaInzageController::class, 'update'])->name('inzage.update');
    Route::delete('/ptsp/inzage/{id}', [MejaInzageController::class, 'destroy'])->name('inzage.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/meja-pidana', [MejaPidanaController::class, 'index'])->name('meja-pidana.index');
    Route::get('/meja-pidana/tambah', [MejaPidanaController::class, 'create'])->name('meja-pidana.create');
    Route::post('/meja-pidana', [MejaPidanaController::class, 'store'])->name('meja-pidana.store');
    Route::post('/meja-pidana/update-kehadiran', [MejaPidanaController::class, 'updateKehadiran'])->name('meja-pidana.update-kehadiran');
    Route::get('/meja-pidana/{id}/edit', [MejaPidanaController::class, 'edit'])->name('meja-pidana.edit');
    Route::put('/meja-pidana/{id}', [MejaPidanaController::class, 'update'])->name('meja-pidana.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
