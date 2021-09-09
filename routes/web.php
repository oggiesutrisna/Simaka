<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\RegisterKaryawanController;
use App\Http\Controllers\ValidateController;
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
Route::resource('karyawans', KaryawanController::class);
Route::resource('registerkaryawans', RegisterKaryawanController::class);

Route::get('validate', [ValidateController::class, 'submitRequest'])->name('validate');
