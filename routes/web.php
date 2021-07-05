<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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



Route::get('', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/home', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about']);

    // Routing halaman siswa
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/{siswa}', [SiswaController::class, 'show']);
    Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy']);
    Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit']);
    Route::patch('/siswa/{siswa}', [SiswaController::class, 'update']);
    Route::post('/siswa', [SiswaController::class, 'store']);
    
});