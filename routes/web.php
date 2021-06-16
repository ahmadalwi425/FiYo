<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/laporan/kehilangan', [App\Http\Controllers\laporanController::class, 'hilang']);
Route::get('/laporan/penemuan', [App\Http\Controllers\laporanController::class, 'temu']);
Route::post('/formfill', [App\Http\Controllers\userController::class, 'filling']);
Route::post('/laporan/hilang', [App\Http\Controllers\laporanController::class, 'laporhilang']);
Route::post('/laporan/temu', [App\Http\Controllers\laporanController::class, 'laportemu']);
Route::get('/cocok', [App\Http\Controllers\cocokController::class, 'cocokpage']);
Route::post('/cocok', [App\Http\Controllers\cocokController::class, 'cocok']);
Route::get('/cocok/list', [App\Http\Controllers\cocokController::class, 'list']);
Route::get('/cocok/hilang', [App\Http\Controllers\cocokController::class, 'listhilang']);
Route::get('/cocok/temu', [App\Http\Controllers\cocokController::class, 'listtemu']);