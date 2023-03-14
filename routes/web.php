<?php

use App\Http\Controllers\Mapcontroller;
use App\Http\Controllers\Layanancontroller;
use App\Http\Controllers\Detaillayanancontroller;
use App\Http\Controllers\Tentangcontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Admin\Dashboardcontroller;
use App\Http\Controllers\Admin\Lokasicontroller;
use App\Http\Controllers\Admin\LayananRumahSakitController;
use App\Http\Controllers\Admin\Tambahlokasicontroller;
use App\Http\Controllers\Admin\Editlokasicontroller;
use App\Http\Controllers\LocationController;
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

Route::get('/', [Mapcontroller::class, 'index'])->name('map.index');
Route::get('/login', [Logincontroller::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [Logincontroller::class, 'authenticate'])->name('login.index')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/map', [Mapcontroller::class, 'index'])->name('map');
Route::get('/detailroute/{id}', [Layanancontroller::class, 'detailroute'])->name('layanan.route_detail');
Route::get('/layanan', [Layanancontroller::class, 'index'])->name('layanan_rumah_sakit');
Route::get('/detaillayanan/{id}/', [Detaillayanancontroller::class, 'index'])->name('detaillayanan');
Route::get('/tentang', [Tentangcontroller::class, 'index'])->name('tentang');
Route::get('/admin', [Logincontroller::class, 'index'])->name('admin');
Route::get('/location', [LocationController::class, 'index'])->name('location');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->name('dashboard')->middleware('auth');
    Route::post('/lokasi/test-repeater', [LokasiController::class, 'test_repeater'])->name('repeter');
    Route::resource('/lokasi', LokasiController::class);
    Route::resource('/layanan', LayananRumahSakitController::class);
});
