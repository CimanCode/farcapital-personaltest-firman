<?php

use App\Http\Controllers\pendonorController;
use App\Http\Controllers\persyaratanController;
use App\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('pendonor')->group(function() {
    Route::get('/list', [pendonorController::class, 'index'])->name('pendonor.list');
    Route::get('/store', [pendonorController::class, 'store'])->name('pendonor.store')->middleware('NoAuth');
    Route::get('/daftar', [pendonorController::class, 'daftar'])->name('pendonor.daftar')->middleware('WithAuth');
    Route::any('/detail/{id}', [pendonorController::class, 'detail'])->name('pendonor.detail');
    Route::get('/delete/{id}', [pendonorController::class, 'delete'])->name('pendonor.delete');
    Route::post('/create', [pendonorController::class, 'create'])->name('pendonor.create')->middleware('NoAuth');
});

Route::prefix('petugas')->group(function() {
    Route::get('/showlogin', [petugasController::class, 'showlogin'])->name('showLogin');
    Route::get('/showregister', [petugasController::class, 'showregister'])->name('showregister');
    Route::get('/logout', [petugasController::class, 'logout'])->name('logout');
    Route::post('/login', [petugasController::class, 'login'])->name('petugas.login');
    Route::post('/register', [petugasController::class, 'register'])->name('petugas.register');
});

Route::get('/list', [persyaratanController::class, 'index'])->name('peryaratan.list')->middleware('WithAuth');;
Route::get('/index', [persyaratanController::class, 'store'])->name('persyaratan.index')->middleware('WithAuth');;
Route::post('/create', [persyaratanController::class, 'create'])->name('persyaratan.create')->middleware('WithAuth');;
