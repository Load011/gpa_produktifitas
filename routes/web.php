<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MobilController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\AfdelingController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\RepairTranController;
use App\Http\Controllers\TripController;

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

    //Route untuk supir
    Route::get('/supir', [SupirController::class, 'index'])->name('supir.index');
    Route::get('/supir/create', [SupirController::class, 'create'])->name('supir.create');
    Route::post('/supir', [SupirController::class, 'store'])->name('supir.store');
    Route::get('/supir/{supir}', [SupirController::class, 'show'])->name('supir.show');
    Route::get('/supir/{supir}/edit', [SupirController::class, 'edit'])->name('supir.edit');
    Route::put('/supir/{supir}', [SupirController::class, 'update'])->name('supir.update');
    Route::delete('/supir/{supir}', [SupirController::class, 'destroy'])->name('supir.destroy');

    //Route untuk kebun
    Route::get('/kebun', [KebunController::class, 'index'])->name('kebun.index');
    Route::get('/kebun/create', [KebunController::class, 'create'])->name('kebun.create');
    Route::post('/kebun', [KebunController::class, 'store'])->name('kebun.store');
    Route::get('/kebun/{kebun}', [KebunController::class, 'show'])->name('kebun.show');
    Route::get('/kebun/{kebun}/edit', [KebunController::class, 'edit'])->name('kebun.edit');
    Route::put('/kebun/{kebun}', [KebunController::class, 'update'])->name('kebun.update');
    Route::delete('/kebun/{kebun}', [KebunController::class, 'destroy'])->name('kebun.destroy');

    //Route untuk Afdeling
    Route::get('/afdeling', [AfdelingController::class, 'index'])->name('afdeling.index');
    Route::get('/afdeling/create', [AfdelingController::class, 'create'])->name('afdeling.create');
    Route::post('/afdeling', [AfdelingController::class, 'store'])->name('afdeling.store');
    Route::get('/afdeling/{afdeling}', [AfdelingController::class, 'show'])->name('afdeling.show');
    Route::get('/afdeling/{afdeling}/edit', [AfdelingController::class, 'edit'])->name('afdeling.edit');
    Route::put('/afdeling/{afdeling}', [AfdelingController::class, 'update'])->name('afdeling.update');
    Route::delete('/afdeling/{afdeling}', [AfdelingController::class, 'destroy'])->name('afdeling.destroy');

    //Route untuk Kendaraan
    Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
    Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
    Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
    Route::get('/kendaraan/{kendaraan}', [KendaraanController::class, 'show'])->name('kendaraan.show');
    Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
    Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
    Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

    //Route untuk Transaksi Perbaikan
    Route::get('/perbaikan', [RepairTranController::class, 'index'])->name('perbaikan.index');
    Route::get('/perbaikan/create', [RepairTranController::class, 'create'])->name('perbaikan.create');
    Route::post('/perbaikan', [RepairTranController::class, 'store'])->name('perbaikan.store');
    Route::get('/perbaikan/{perbaikan}', [RepairTranController::class, 'show'])->name('perbaikan.show');
    Route::get('/perbaikan/{perbaikan}/edit', [RepairTranController::class, 'edit'])->name('perbaikan.edit');
    Route::put('/perbaikan/{perbaikan}', [RepairTranController::class, 'update'])->name('perbaikan.update');
    Route::delete('/perbaikan/{perbaikan}', [RepairTranController::class, 'destroy'])->name('perbaikan.destroy');

    //Route untuk trip Tandan
    Route::get('/trip', [TripController::class, 'index'])->name('trip.index');
    Route::get('/trip/create', [TripController::class, 'create'])->name('trip.create');
    Route::post('/trip', [TripController::class, 'store'])->name('trip.store');
    Route::get('/trip/{trip}', [TripController::class, 'show'])->name('trip.show');
    Route::get('/trip/{trip}/edit', [TripController::class, 'edit'])->name('trip.edit');
    Route::put('/trip/{trip}', [TripController::class, 'update'])->name('trip.update');
    Route::delete('/trip/{trip}', [TripController::class, 'destroy'])->name('trip.destroy');
    Route::get('/get-afdelings/{kebun_id}', [TripController::class, 'getAfdelings']);

});

require __DIR__.'/auth.php';
