<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('backend.login');
});
Route::get('backend/admin/beranda', [BerandaController::class, 'berandaBackendAdmin'])->name('backend.admin.beranda')->middleware('auth');
Route::get('backend/kasir/beranda', [BerandaController::class, 'berandaBackendKasir'])->name('backend.kasir.beranda')->middleware('auth');
Route::get('backend/login', [LoginController::class, 'login'])->name('backend.login');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');

// package (user)
// Route::resource('backend/admin/user', UserController::class, ['as' => 'backend'])->middleware('auth');
// Route::resource('backend/admin/service', ServiceController::class, ['as' => 'backend'])->middleware('auth');
// Route::resource('backend/admin/transaksi', TransaksiceController::class, ['as' => 'backend'])->middleware('auth');

// Route::get('backend/admin/user', [UserController::class, 'user'])->name('backend.user.beranda')->middleware('auth');
// Route::get('backend/admin/user/create', [UserController::class, 'create'])->name('backend.user.create')->middleware('auth');

//service
Route::get('backend/admin/service', [ServiceController::class, 'service'])->name('backend.service.beranda')->middleware('auth');
Route::get('backend/admin/service/tambah', [ServiceController::class, 'create'])->name('backend.service.create')->middleware('auth');
Route::get('backend/admin/service/edit', [ServiceController::class, 'edit'])->name('backend.service.edit')->middleware('auth');

//ntar matiin aja kalo udah ada databse
Route::get('backend/admin/user', [UserController::class, 'index'])->name('backend.user.beranda')->middleware('auth');
Route::get('backend/admin/user/tambah', [UserController::class, 'create'])->name('backend.user.create')->middleware('auth');
Route::get('backend/admin/user/edit', [UserController::class, 'edit'])->name('backend.user.edit')->middleware('auth');

//transaksi
Route::get('backend/admin/transaksi', [TransaksiController::class, 'index'])->name('backend.transaksi.beranda')->middleware('auth');

//history
Route::get('backend/admin/history', [HistoryController::class, 'index'])->name('backend.history.beranda')->middleware('auth');

//laporan
Route::get('backend/admin/laporan', [LaporanController::class, 'index'])->name('backend.laporan.beranda')->middleware('auth');