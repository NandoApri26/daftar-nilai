<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'index']);
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('Dashboard');

Route::get('/Dosen', [DosenController::class, 'index'])->name('Dosen');

// Mahasiswa
Route::get('/Mahasiswa', [MahasiswaController::class, 'index'])->name('Mahasiswa');
Route::get('/Mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('Mahasiswa.show');

Route::get('/MataKuliah', [MataKuliahController::class, 'index'])->name('MataKuliah');
