<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Dosen routes
Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
Route::get('/dosen/{id}/edit', [DosenController::class, 'edit'])->name('dosen.edit');
Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');

// Mahasiswa routes
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::resource('budi', App\Http\Controllers\BudiController::class);

Route::resource('lol', App\Http\Controllers\LolController::class);

Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('xxxx', App\Http\Controllers\XxxxController::class);

Route::resource('xddd', App\Http\Controllers\XdddController::class);

Route::resource('dua', App\Http\Controllers\DuaController::class);

Route::resource('tiga', App\Http\Controllers\TigaController::class);

Route::resource('empat', App\Http\Controllers\EmpatController::class);

Route::resource('lima', App\Http\Controllers\LimaController::class);

Route::resource('satu', App\Http\Controllers\SatuController::class);

Route::resource('jfklasjdf', App\Http\Controllers\JfklasjdfController::class);

Route::resource('matkul', App\Http\Controllers\MatkulController::class);
