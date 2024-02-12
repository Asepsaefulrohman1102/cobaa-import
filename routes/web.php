<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DataFileController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\Pelanggaran28Controller;
use App\Http\Controllers\Pelanggaran30Controller;

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

// DATA FILE
Route::get('/', [PelanggaranController::class, 'hitungpelanggaran']);
Route::get('/pelanggaran',[DataFileController::class, 'index'])->name('page.pelanggaran.index');
Route::post('/users/import',[DataFileController::class, 'import'])->name('users.import_31_days');
Route::post('/users/import_30', [DataFileController::class, 'import_30'])->name('users.import_30_days');
Route::post('/users/import_28', [DataFileController::class, 'import_28'])->name('users.import_28_days');
Route::delete('/pelanggaran/info-pelanggaran', [DataFileController::class, 'deleteAllUsers'])->name('pelanggaran.deleteAll');
Route::delete('/pelanggaran/info-pelanggaran-30', [DataFileController::class, 'deleteAllUsers30'])->name('pelanggaran.deleteAll30');
Route::delete('/pelanggaran/info-pelanggaran-28', [DataFileController::class, 'deleteAllUsers28'])->name('pelanggaran.deleteAll28');
Route::delete('/pelanggaran/info-pelanggaran-all', [DataFileController::class, 'deleteAllData'])->name('pelanggaran.deleteAllData');
Route::get('/hitung-pelanggaran', [DataFileController::class, 'getUsersWithPCCount']);
Route::get('/detail-pelanggaran',function(){
    return view('page.pegawai.detailpelanggaran');
});



// DATA PEGAWAI
Route::get('/pegawai/data_pegawai',[PegawaiController::class, 'index'])->name('page.pegawai.data_pegawai');
// Tambah Data Pegawai
Route::get('/pegawai/tambah-pegawai',[PegawaiController::class, 'tambah'])->name('pegawai.tambah');
Route::post('/store-pegawai',[PegawaiController::class, 'store'])->name('pegawai.store');
// Edit Data Pegawai
Route::get('/pegawai/edit-pegawai/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update-pegawai',[PegawaiController::class, 'update']);
// Hapus Data Pegawai
Route::get('/pegawai/hapus-pegawai',[PegawaiController::class, 'hapus']);

// IMPORT DATA PEGAWAI
Route::post('/pegawai/import',[PegawaiController::class, 'import'])->name('pegawai.importPegawai');
// HAPUS SEMUA DATA PEGAWAI
Route::delete('/pegawai/hapus-pegawai', [PegawaiController::class, 'deleteAllPegawai'])->name('pegawai.deletePegawai');

// detail pegawai
// Route::get('/pegawai/detail-pegawai/{nama_pegawai}', [PegawaiController::class, 'detail'])->name('page.pegawai.detail_pegawai');
// // detail pelanggaran pegawai
// // Route::get('/pegawai/detail-pelanggaran-pegawai/{nama_pegawai}', [PelanggaranController::class, 'detailPelanggaranPegawai'])->name('page.pegawai.detail_pelanggaran_pegawai');
Route::get('/pegawai/detail-pegawai/{nama_pegawai}', [PegawaiController::class, 'detailPegawai']);

// Route::prefix('/pegawai/detail-pegawai/{nama_pegawai}')->group(function () {
//     Route::get('/', [PegawaiController::class, 'detail'])->name('page.pegawai.detail_pegawai');
//     Route::get('/info-pelanggaran', [PelanggaranController::class, 'infoPelanggaranSetiapPegawai'])->name('page.pegawai.detail_pelanggaran_pegawai');
// });


// Pelanggaran
// Info Pelanggaran
Route::get('/pelanggaran/info-pelanggaran',[PelanggaranController::class, 'info'])->name('page.pelanggaran.info-pelanggaran');

// pulang Cepat
Route::get('/pelanggaran/pc-pelanggaran',[PelanggaranController::class, 'pc'])->name('page.pelanggaran.pc');
// Alfa
Route::get('/pelanggaran/alfa-pelanggaran',[PelanggaranController::class, 'alfa'])->name('page.pelanggaran.alfa');


