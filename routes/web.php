<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengeluaranController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    // kategori
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'del'])->name('delete');
    Route::resource('kategori', KategoriController::class);

    // produk
    Route::get('/produk/{id}/delete', [ProdukController::class, 'del'])->name('delete');
    Route::resource('produk', ProdukController::class);

    // pembelian
    Route::get('/pembelian/{id}/delete', [PembelianController::class, 'del'])->name('delete');
    Route::resource('pembelian', PembelianController::class);

    // pengeluaran
    Route::get('/pengeluaran/{id}/delete', [PengeluaranController::class, 'del'])->name('delete');
    Route::resource('pengeluaran', PengeluaranController::class);
});
