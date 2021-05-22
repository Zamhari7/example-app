<?php

use App\Http\Controllers\HelloController;
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
    return "Hello Word";
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/page2', [HelloController::class, 'page2']);
Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'destroy']);
Route::get('/mahasiswa/pdf', [MahasiswaController::class, 'generate']);
Route::resource('mahasiswa', MahasiswaController::class);
