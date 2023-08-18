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

// DAFTAR
Route::resource('daftar', App\Http\Controllers\DaftarController::class);

// BAYAR
Route::resource('bayar', App\Http\Controllers\BayarController::class);

// LOGIN
Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);

// LOGOUT
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);


Route::get('/', function () {
    return view('index');
});


Route::get('/admin', function () {
    return redirect()->to('/login');
});

Route::get('/home', function () {
    return redirect()->to('/welcome');
});

Route::get('/admin_daftar', [App\Http\Controllers\DaftarController::class, 'index_admin']);

Route::get('/welcome_admin', [App\Http\Controllers\DaftarController::class, 'perhitungan']);

Route::get('/create_admin', [App\Http\Controllers\DaftarController::class, 'create_admin']);

Route::get('/formAdmin', [App\Http\Controllers\DaftarController::class, 'formAdmin']);

Route::get('/form_bayar', [App\Http\Controllers\BayarController::class, 'form_bayar']);

Route::get('/bayar_daftar', [App\Http\Controllers\BayarController::class, 'bayar_daftar']);

Route::get('/daftar_alur', [App\Http\Controllers\DaftarController::class, 'daftar_alur']);

Route::get('/daftar_index', [App\Http\Controllers\DaftarController::class, 'daftar_index']);

Route::get('/daftar_infokegiatan', [App\Http\Controllers\DaftarController::class, 'daftar_infokegiatan']);

Route::get('/status/{id}', [App\Http\Controllers\DaftarController::class, 'status']);

Route::get('/statusBayar/{id}', [App\Http\Controllers\BayarController::class, 'statusBayar']);

// CARI
Route::get('/cari', [App\Http\Controllers\BayarController::class, 'cari']);

// REPORT DAFTAR
Route::get('/reportDaftar', [App\Http\Controllers\DaftarController::class, 'reportDaftar']);

// REPORT BAYAR
Route::get('/reportBayar', [App\Http\Controllers\BayarController::class, 'reportBayar']);
