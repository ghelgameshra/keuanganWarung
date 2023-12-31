<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SetorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn() => redirect()->route('login'));

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/dashboard', function () { return view('dashboard.dashboard'); })->name('dashboard');
        Route::get('/dashboard/profile', [DashboardController::class, 'profile']);
        Route::resource('/dashboard/laporan', LaporanController::class);

        // setor
        Route::resource('/dashboard/setor', SetorController::class);
        Route::get('/dashboard/rangkuman', [DashboardController::class, 'rangkuman']);

        // absensi
        Route::resource('/absen', AbsenController::class);
        Route::post('/absen/update', [AbsenController::class, 'update'])->name('absen.update');
    });

