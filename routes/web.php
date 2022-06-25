<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Master\ProdukController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Master\KategoriController;
use App\Http\Controllers\Backend\Master\StatusController;
use App\Http\Controllers\Frontend\KategoriProdukController;
use App\Http\Controllers\Frontend\ProdukController as FrontendProdukController;

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

// ----------------------------------------------------------------------
// Frontend
// ----------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::prefix('detail-produk')->group(function () {
    Route::get('/{slug}', [FrontendProdukController::class, 'productDetails'])->name('detail-produk.produkId');
});
Route::get('produk/{key:slug}', [KategoriProdukController::class, 'productByCategory'])->name('product-category.id');

Route::prefix('search')->group(function () {
    Route::get('/products', [FrontendProdukController::class, 'searchProducts'])->name('search-products');
});


// ----------------------------------------------------------------------
// Backend
// ----------------------------------------------------------------------
Route::group(['middleware' => 'auth'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::prefix('dashboard')->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
    });

    Route::resources([
        'produk' => ProdukController::class,
        'kategori' => KategoriController::class,
        'status' => StatusController::class,
        'blog' => BlogController::class,
    ]);
});

// ----------------------------------------------------------------------
// Auth
// ----------------------------------------------------------------------

Route::controller(LoginController::class)->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/', 'index')->name('login');
        Route::get('auth', 'authenticate')->name('auth.login');
    });
});

Route::controller(LogoutController::class)->group(function () {
    Route::prefix('logout')->group(function () {
        Route::get('/', 'index')->name('logout');
    });
});
