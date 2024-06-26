<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Pendidikan;

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

Route::get('/', [Home::class, 'index']);

Route::get('/pegawai', [Pegawai::class, 'index']);

Route::get('/jabatan', [Jabatan::class, 'index']);

Route::get('/pendidikan', [Pendidikan::class, 'index']);
