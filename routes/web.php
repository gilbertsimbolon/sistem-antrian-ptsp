<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MejaPidanaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/meja-inzage', function () {
    return view('meja_inzage');
})->middleware(['auth', 'verified'])->name('meja_inzage');

Route::get('/meja-umum', function () {
    return view('meja_umum');
})->middleware(['auth', 'verified'])->name('meja_umum');

Route::get('/meja-perdata', function () {
    return view('meja_perdata');
})->middleware(['auth', 'verified'])->name('meja_perdata');

Route::middleware('auth')->group(function () {
    Route::get('/meja-pidana', [MejaPidanaController::class, 'index'])->name('meja-pidana.index');
    Route::get('/meja-pidana/create', [MejaPidanaController::class, 'create'])->name('meja-pidana.create');
    Route::post('/meja-pidana', [MejaPidanaController::class, 'store'])->name('meja-pidana.store');
    Route::post('/meja-pidana/update-kehadiran', [MejaPidanaController::class, 'updateKehadiran'])
    ->name('meja-pidana.update-kehadiran');
    Route::get('/meja-pidana/{id}/edit', [MejaPidanaController::class, 'edit'])->name('meja-pidana.edit');
    Route::put('/meja-pidana/{id}', [MejaPidanaController::class, 'update'])->name('meja-pidana.update');
});



Route::get('/meja-hukum-atau-pengaduan', function () {
    return view('meja_hukum_atau_pengaduan');
})->middleware(['auth', 'verified'])->name('meja_hukum_atau_pengaduan');

Route::get('/meja-pojok-e-court', function () {
    return view('meja_pojok_e_court');
})->middleware(['auth', 'verified'])->name('meja_pojok_e_court');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
