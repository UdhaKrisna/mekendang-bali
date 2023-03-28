<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\PenjelajahanController;
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

// Home
Route::get('/', [HomeController::class, 'index']);

// Simple Searching
Route::get('simple-pencarian', [HomeController::class, 'simpleSearch']);

// Gallery
Route::get('gallery', [GalleryController::class, 'index']);

// Penjelajahan
Route::get('penjelajahan', [PenjelajahanController::class, 'index']);
Route::get('penjelajahan/{kriteria}', [PenjelajahanController::class, 'penjelajahanKriteria'])->name('penjelajahan-kriteria');
Route::get('penjelajahan/list/{kriteria}', [PenjelajahanController::class, 'penjelajahanListKriteria'])->name('penjelajahan-list-kriteria');
Route::get('penjelajahan/list/kendang/{kriteria}', [PenjelajahanController::class, 'penjelajahanListKendang'])->name('penjelajahan-list-kendang');

// Pencarian
Route::get('pencarian', [PencarianController::class, 'index'])->name('cari');

// Detail
Route::get('detail/{id}', [DetailController::class, 'detail'])->name('detail');
