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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [App\Http\Controllers\IndexController::class, 'pendaftaran']);
Route::post('/pendaftaran/submit', [App\Http\Controllers\IndexController::class, 'pendaftaran_submit']);
Route::get('/pendaftaran/berhasil', [App\Http\Controllers\IndexController::class, 'pendaftaran_berhasil']);

Route::get('/login-siswa', [App\Http\Controllers\IndexController::class, 'login_siswa']);

Route::group(['middleware'=>['auth']],function(){
	//Siswa
	Route::get('/pendaftaran-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'form_pendaftaran']);
	Route::post('/submit-pendaftaran-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'psb_submit']);
	Route::get('/upload-berkas', [App\Http\Controllers\PendaftaranController::class, 'upload_berkas']);
	Route::post('/upload-berkas/submit', [App\Http\Controllers\PendaftaranController::class, 'upload_berkas_submit']);
	Route::get('/cetak-formulir/{no_daftar}', [App\Http\Controllers\PendaftaranController::class, 'cetak_form']);

	//Admin
	Route::get('/data-pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran']);
	Route::get('/data-pendaftaran/tambah', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_tambah']);
	Route::get('/data-pendaftaran/edit/{no_daftar}', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_edit']);
	Route::post('/data-pendaftaran/edit/{no_daftar}/submit', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_edit_submit']);
	Route::get('/data-pendaftaran/detail/{no_daftar}', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_detail']);
	Route::get('/data-pendaftaran/{id}/delete', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_delete']);
	Route::post('/data-pendaftaran/verifikasi/{no_daftar}', [App\Http\Controllers\PendaftaranController::class, 'data_pendaftaran_verifikasi']);

	Route::get('/upload-berkas-admin/{id}', [App\Http\Controllers\PendaftaranController::class, 'upload_berkas_admin']);

	Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
	Route::get('/data-sekolah', [App\Http\Controllers\DatasekolahController::class, 'index']);
});
