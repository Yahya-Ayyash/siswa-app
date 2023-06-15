<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;


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

//AUTH
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/create', [SiswaController::class, 'create']);
Route::post('siswa', [SiswaController::class, 'store']);
Route::delete('siswa/{id}', [SiswaController::class, 'destroy']);
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::patch('siswa/{id}', [SiswaController::class, 'update']);

