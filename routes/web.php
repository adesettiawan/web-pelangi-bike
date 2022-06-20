<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Master\ProdukController;
use App\Http\Controllers\Frontend\HomeController;
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

// ----------------------------------------------------------------------
// Frontend
// ----------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('beranda');

// ----------------------------------------------------------------------
// Backend
// ----------------------------------------------------------------------

Route::controller(DashboardController::class)->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
});

Route::resources([
    'produk' => ProdukController::class,
]);
