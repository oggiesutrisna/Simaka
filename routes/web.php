<?php

use App\Http\Controllers\RegisterKaryawanController;
use App\Http\Controllers\ValidateController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function() {
    return view('registerkaryawans.create');
});

Auth::routes();

// Resource

Route::prefix('auth')->group(function () {
});
// fungsi route resource agar saat perintah create update delete tidak memanggil fungsi di bagian controller.
Route::resource('registerkaryawans', RegisterKaryawanController::class);
// Get
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('validate', [ValidateController::class, 'submitRequest'])->name('validate');
