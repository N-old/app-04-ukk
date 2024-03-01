<?php

use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\PinjamController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'login'])->name('login');
    Route::post('/dologin', [SessionController::class, 'dologin'])->name('dologin');
    Route::get('/register', [SessionController::class, 'register'])->name('register');
    Route::post('/doregister', [SessionController::class, 'doregister'])->name('doregister');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        // Route::middleware('role:admin, petugas')->group(function () {
            Route::resource('/buku', BukuController::class);
            Route::resource('/kategori', KategoriController::class);
            Route::resource('/user', UserController::class);
            Route::resource('/kategori', KategoriController::class);
            Route::resource('/pinjam', PinjamController::class);
            Route::resource('/ulasan', UlasanController::class);
        // });
    });
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/pustaka', PustakaController::class);

// Route::get('/buku', function () {
//     return view ('dashboard.buku.index');
// });
// Route::get('/book', function () {
//     return view('book');
// });
// Route::get('/book-detail', function () {
//     return view('book-detail');
// });
// Route::get('/profil', function () {
//     return view('profile');
// });
// Route::get('/login', function () {
//     return view('partials.login');
// });
// Route::get('/register', function () {
//     return view('partials.register');
// });
// Route::get('/forgot', function () {
//     return view('partials.forgot');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });
// Route::get('/dashboard/data-table', function () {
//     return view('dashboard.partials.data-table');
// });
// Route::get('/dashboard/card-book', function () {
//     return view('dashboard.partials.card-data');
// });
// Route::get('/dashboard/form', function () {
//     return view('dashboard.partials.form');
// });
