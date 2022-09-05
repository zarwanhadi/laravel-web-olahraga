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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('jenis');
Route::post('/add_jenis', [App\Http\Controllers\HomeController::class, 'add_jenis'])->name('add_jenis');
Route::post('/delete_jenis', [App\Http\Controllers\HomeController::class, 'delete_jenis'])->name('delete_jenis');
Route::post('/edit_jenis', [App\Http\Controllers\HomeController::class, 'edit_jenis'])->name('edit_jenis');
Route::get('/atlet', [App\Http\Controllers\HomeController::class, 'atlet'])->name('atlet');
Route::post('/add_atlet', [App\Http\Controllers\HomeController::class, 'add_atlet'])->name('add_atlet');
Route::post('/delete_atlet', [App\Http\Controllers\HomeController::class, 'delete_atlet'])->name('delete_atlet');
Route::post('/edit_atlet', [App\Http\Controllers\HomeController::class, 'edit_atlet'])->name('edit_atlet');
