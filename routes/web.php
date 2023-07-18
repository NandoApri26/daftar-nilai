<?php

// Controller
use App\Http\Controllers\DaftarNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

// Model
use App\Models\Dosen;
use App\Models\MataKuliah;

// Route
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
Route::post('/Dosen/create', [DosenController::class, 'create'])->name('Create');
Route::get('/Dosen/{dosen}', [DosenController::class, 'show'])->name('Detail');
Route::get('/Dosen/{dosen}/edit', [DosenController::class, 'edit'])->name('Edit');
Route::patch('/Dosen/{dosen}', [DosenController::class, 'update'])->name('Update');
Route::delete('/Dosen/{dosen}', [DosenController::class, 'destroy'])->name('Delete');

// Mahasiswa
Route::get('/Mahasiswa', [MahasiswaController::class, 'index'])->name('Mahasiswa');
Route::get('/Mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('Mahasiswa.show');

Route::get('/MataKuliah', [MataKuliahController::class, 'index'])->name('MataKuliah');
Route::post('/MataKuliah/create', [MataKuliahController::class, 'create'])->name('Create');
Route::get('/MataKuliah/{mataKuliah}/edit', [MataKuliahController::class, 'edit'])->name('Edit');
Route::patch('/MataKuliah/{mataKuliah}', [MataKuliahController::class, 'update'])->name('Update');
Route::delete('/MataKuliah/{mataKuliah}', [MataKuliahController::class, 'destroy'])->name('Delete');

Route::get('/DaftarNilai', [DaftarNilaiController::class, 'index'])->name('DaftarNilai');
