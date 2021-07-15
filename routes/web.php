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
	Route::get('/pendaftaran-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'form_pendaftaran']);
	Route::post('/submit-pendaftaran-siswa-baru', [App\Http\Controllers\PendaftaranController::class, 'psb_submit']);
	Route::get('/upload-berkas', [App\Http\Controllers\PendaftaranController::class, 'upload_berkas']);
	});
