<?php

use App\Http\Controllers\AdminController;
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

Route::get('/meja-pidana', function () {
    return view('meja_pidana');
})->middleware(['auth', 'verified'])->name('meja_pidana');

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
