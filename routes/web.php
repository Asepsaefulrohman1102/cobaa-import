<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ViolationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UsersController::class, 'index'])->name('users.index');
Route::post('/users/import',[UsersController::class, 'import'])->name('users.import');

Route::get('/violations/count', [ViolationController::class, 'countViolations'])->name('violations.count');

Route::get('/users/pc-count', [UsersController::class, 'getUsersWithPCCount']);

// routes/web.php

Route::delete('/users', [UsersController::class, 'deleteAllUsers'])->name('users.deleteAll');



