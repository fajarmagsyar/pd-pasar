<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'index']);
Route::get('/admn-pg/login', [ClientController::class, 'login']);
Route::get('/pasar/{id}', [ClientController::class, 'pasarDetail']);
Route::get('/pasar/{pasar}/{produk}', [ClientController::class, 'detailProduk']);

Route::get('/admn-pg/dashboard', [AdminController::class, 'index']);

//AUTH
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

//PASAR
Route::get('/admn-pg/pasar', [AdminController::class, 'pasar']);
Route::get('/admn-pg/pasar/tambah', [AdminController::class, 'pasarTambah']);
Route::post('/admn-pg/pasar/tambah', [AdminController::class, 'pasarStore']);
Route::get('/admn-pg/pasar/{id}/edit', [AdminController::class, 'pasarEdit']);
Route::post('/admn-pg/pasar/{id}/edit', [AdminController::class, 'pasarUpdate']);
Route::get('/admn-pg/pasar/{id}/hapus', [AdminController::class, 'pasarHapus']);

//produk
Route::get('/admn-pg/produk', [AdminController::class, 'produk']);
Route::get('/admn-pg/produk/tambah', [AdminController::class, 'produkTambah']);
Route::post('/admn-pg/produk/tambah', [AdminController::class, 'produkStore']);
Route::get('/admn-pg/produk/{id}/edit', [AdminController::class, 'produkEdit']);
Route::post('/admn-pg/produk/{id}/edit', [AdminController::class, 'produkUpdate']);
Route::get('/admn-pg/produk/{id}/hapus', [AdminController::class, 'produkHapus']);

Route::get('/admn-pg/produk/{id}/tambah-harga', [AdminController::class, 'tambahHarga']);
Route::post('/admn-pg/produk/{id}/tambah-harga', [AdminController::class, 'hargaTambahStore']);

//harga
Route::get('/admn-pg/harga', [AdminController::class, 'harga']);
