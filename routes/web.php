<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Kendaraan
Route::get('/data-kendaraan', function () {
    return view('data-kendaraan');
})->name('data-kendaraan.view');

Route::get('/data-kendaraan/tambah', function () {
    return view('tambah-kendaraan');
})->name('tambah-data-kendaraan.view');

// STNK
Route::get('/data-stnk', function () {
    return view('data-stnk');
})->name('data-stnk.view');

// KIR
Route::get('/data-kir', function () {
    return view('data-kir');
})->name('data-kir.view');