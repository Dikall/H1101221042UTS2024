<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gaji;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Presensi;
use App\Http\Controllers\Main;
use App\Http\Controllers\profile;

Route::get('profile', [Profile::class, 'index']);
Route::get('main', [Main::class, 'index']);
Route::get('gaji', [Gaji::class, 'index']);
Route::get('home', [Home::class, 'index']);
Route::get('jabatan', [Jabatan::class, 'index']);
Route::get('presensi', [Presensi::class, 'index']);