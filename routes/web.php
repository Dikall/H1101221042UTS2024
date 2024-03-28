<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gaji;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Presensi;

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



Route::get('gaji', [Gaji::class, 'index']);
Route::get('home', [Home::class, 'index']);
Route::get('jabatan', [Jabatan::class, 'index']);
Route::get('presensi', [Presensi::class, 'index']);