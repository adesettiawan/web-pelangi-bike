<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('dashboard', function () {
    $data['title'] = 'Pelangi Bike';
    $data['intro'] = 'Pelangi Bike';
    $data['type'] = 'Pelangi Bike';
    $data['url'] = URL::current();
    return view('backend.beranda.dashboard',compact('data'));
})->name('dashboard');
