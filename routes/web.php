<?php

use App\Http\Controllers\DataFileController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\PelanggaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/pelanggaran',[DataFileController::class, 'index'])->name('page.pegawai.index');
Route::post('/users/import',[DataFileController::class, 'import'])->name('users.import');

// Route::get('/violations/count', [ViolationController::class, 'countViolations'])->name('violations.count');

Route::get('/users/pc-count', [DataFileController::class, 'getUsersWithPCCount']);

// routes/web.php

Route::delete('/users', [DataFileController::class, 'deleteAllUsers'])->name('users.deleteAll');

Route::get('/', [PelanggaranController::class, 'hitungpelanggaran']);

Route::get('/hitung-pelanggaran', [DataFileController::class, 'getUsersWithPCCount']);


// DATA PEGAWAI
Route::get('/data_pegawai',[PegawaiController::class, 'index'])->name('page.pegawai.data_pegawai');

// Tambah Data Pegawai
Route::get('/tambah-pegawai',[PegawaiController::class, 'tambah'])->name('pegawai.tambah');

Route::post('/store-pegawai',[PegawaiController::class, 'store'])->name('pegawai.store');

// Edit Data Pegawai
Route::get('/data_pegawai/edit-pegawai/{id}',[PegawaiController::class, 'edit']);

Route::post('/data_pegawai/update-pegawai',[PegawaiController::class, 'update']);

// Hapus Data Pegawai
Route::get('/data_pegawai/hapus-pegawai/{id}',[PegawaiController::class, 'hapus']);
