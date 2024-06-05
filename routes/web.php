<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PenyewaController;


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

Route::resource('dashboard-admin', AdminController::class);
Route::resource('dashboard-pemilik', PemilikController::class);
Route::resource('dashboard-penyewa', PenyewaController::class);
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('search-kost', [KosController::class, 'index'])->name('search-kos');
Route::get('view-booking', [BookingController::class, 'index'])->name('view-bookings');
// Route::get('bookings/{id}', [BookingController::class, 'store'])->name('book-kos');


// Route::middleware(['auth', 'role:penyewa'])->group(function () {
//     Route::get('search-kos', [KosController::class, 'index'])->name('search-kos');
//     Route::get('kos/{id}', [KosController::class, 'show'])->name('kos.show');
//     Route::get('view-bookings', [BookingController::class, 'index'])->name('view-bookings');
// });
