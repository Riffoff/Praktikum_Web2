<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
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

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/loginStore', 'loginStore')->name('loginStore');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->name('admin.')->group(function () {
    Route::get('/admin', 'beranda')->name('beranda');

    Route::controller(MahasiswaController::class)->name('mahasiswa.')->group(function () {
        Route::get('/mahasiswa/data', 'index')->name('index');
        Route::get('/mahasiswa/create', 'create')->name('create');
        Route::post('/mahasiswa/create', 'store')->name('store');
        Route::get('/mahasiswa/edit/{id}', 'edit')->name('edit');
        Route::put('/mahasiswa/edit/{id}', 'update')->name('update');
        Route::delete('/mahasiswa/{id}/delete', 'destroy')->name('destroy');
        Route::get('/mahasiswa/print/data', 'print')->name('print');
        Route::get('/mahasiswa/search', 'search')->name('search');
    });
    // Data Mahasiswa
});
