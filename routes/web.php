<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gaji;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Presensi;


Route::get('gaji', [Gaji::class, 'index']);
Route::get('home', [Home::class, 'index']);
Route::get('jabatan', [Jabatan::class, 'index']);
Route::get('presensi', [Presensi::class, 'index']);