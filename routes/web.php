<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route untuk mobil
    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
    Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
    Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
    Route::get('/mobil/{mobil}', [MobilController::class, 'show'])->name('mobil.show');
    Route::get('/mobil/{mobil}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::put('/mobil/{mobil}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('/mobil/{mobil}', [MobilController::class, 'destroy'])->name('mobil.destroy');
});

require __DIR__.'/auth.php';
