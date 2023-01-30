<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PdfController;
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

//PDF EXPORT
Route::get('/print/pdf/seluruh/{pasar_id}', [PdfController::class, 'seluruhPerPasar']);

Route::get('/', [ClientController::class, 'index']);
Route::get('/admn-pg/login', [ClientController::class, 'login']);
Route::get('/pasar/{id}', [ClientController::class, 'pasarDetail']);
Route::get('/pasar/{pasar}/{produk}', [ClientController::class, 'detailProduk']);

Route::get('/admn-pg/dashboard', [AdminController::class, 'index'])->middleware(['checkAuth']);

//AUTH
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

//PASAR
Route::get('/admn-pg/pasar', [AdminController::class, 'pasar'])->middleware(['checkAuth']);
Route::get('/admn-pg/pasar/tambah', [AdminController::class, 'pasarTambah'])->middleware(['checkAuth']);
Route::post('/admn-pg/pasar/tambah', [AdminController::class, 'pasarStore'])->middleware(['checkAuth']);
Route::get('/admn-pg/pasar/{id}/edit', [AdminController::class, 'pasarEdit'])->middleware(['checkAuth']);
Route::post('/admn-pg/pasar/{id}/edit', [AdminController::class, 'pasarUpdate'])->middleware(['checkAuth']);
Route::get('/admn-pg/pasar/{id}/hapus', [AdminController::class, 'pasarHapus'])->middleware(['checkAuth']);

//produk
Route::get('/admn-pg/produk', [AdminController::class, 'produk'])->middleware(['checkAuth']);
Route::get('/admn-pg/produk/tambah', [AdminController::class, 'produkTambah'])->middleware(['checkAuth']);
Route::post('/admn-pg/produk/tambah', [AdminController::class, 'produkStore'])->middleware(['checkAuth']);
Route::get('/admn-pg/produk/{id}/edit', [AdminController::class, 'produkEdit'])->middleware(['checkAuth']);
Route::post('/admn-pg/produk/{id}/edit', [AdminController::class, 'produkUpdate'])->middleware(['checkAuth']);
Route::get('/admn-pg/produk/{id}/hapus', [AdminController::class, 'produkHapus'])->middleware(['checkAuth']);

Route::get('/admn-pg/produk/{id}/tambah-harga', [AdminController::class, 'tambahHarga'])->middleware(['checkAuth']);
Route::post('/admn-pg/produk/{id}/tambah-harga', [AdminController::class, 'hargaTambahStore'])->middleware(['checkAuth']);

//harga
Route::get('/admn-pg/harga', [AdminController::class, 'harga'])->middleware(['checkAuth']);

//panic button
Route::get('/admn-pg/panic-button', [AdminController::class, 'panicButton'])->middleware(['checkAuth']);
