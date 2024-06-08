<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PenyewaController;
use Illuminate\Support\Facades\Auth;

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




Route::get('homee', [HomeeController::class, 'index'])->name('home');

Route::get('search-kost', [KosController::class, 'index'])->name('search-kos');
Route::get('view-booking', [BookingController::class, 'index'])->name('view-bookings');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'role:pemilik'], function () {
    Route::resource('dashboard-pemilik', PemilikController::class);
});

Route::group(['middleware' => 'role:admin'], function () {
    Route::resource('dashboard-admin', AdminController::class);
});

Route::group(['middleware' => 'role:penyewa'], function () {
    Route::resource('dashboard-penyewa', PenyewaController::class);
});




// Route::group(
//     ['middleware' => ['auth', 'role:admin']],
//     function () {

//         Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     }
// );

// Route::group(
//     ['middleware' => ['auth', 'role:penyewa']],
//     function () {
//         Route::get('/penyewa/dashboard', [PenyewaController::class, 'dashboard'])->name('penyewa.dashboard');
//     }
// );

// Route::group(
//     ['middleware' => ['auth', 'role:pemilik']],
//     function () {
//         Route::get('/pemilik/dashboard', [PemilikController::class, 'dashboard'])->name('pemilik.dashboard');
//     }
// );
