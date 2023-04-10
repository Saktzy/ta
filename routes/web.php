<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Sirkulasi\KelahiranController;
use App\Http\Controllers\Keloladata\PendudukController;
use App\Http\Controllers\Keloladata\KeluargaController;
use App\Http\Controllers\Keloladata\AnggotaController;
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

Route::get('/', [HomeController::class, 'index']);
// Route::get('kelahiran', [KelahiranController::class, 'index']);
// Route::get('kelahiran/create', [KelahiranController::class, 'create']);
Route::resource('kelahiran', KelahiranController::class);
Route::resource('penduduk', PendudukController::class);
Route::resource('keluarga', KeluargaController::class);
Route::resource('anggota', AnggotaController::class);

Route::get('keluarga/anggota/{keluarga}', [AnggotaController::class, 'showAnggota']);
