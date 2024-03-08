<?php

use App\Http\Controllers\BukuExportController;
use App\Http\Controllers\ExportBukuController;
use App\Http\Controllers\Dashboard\BukuController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\PinjamController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\ProfilController;
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

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::middleware('userAcces:admin,petugas')->group(function () {
            Route::resource('buku', BukuController::class);
            Route::resource('kategori', KategoriController::class);
            Route::resource('ulasan', UlasanController::class);
            Route::get('peminjaman', [PinjamController::class, 'index'])->name('peminjaman.index');
            Route::get('peminjaman/{pinjam}', [PinjamController::class, 'show'])->name('peminjaman.show');
            Route::put('peminjaman/{pinjam}/edit', [PinjamController::class, 'update'])->name('peminjaman.update');
            Route::post('peminjaman/{pinjam}/edit', [PinjamController::class, 'update'])->name('peminjaman.update');
            Route::get('export/buku', [BukuController::class, 'export'])->name('buku.export');
            Route::get('export/user', [UserController::class, 'export'])->name('user.export');
            Route::get('export/pinjam', [PinjamController::class, 'export'])->name('pinjam.export');
        });

        Route::middleware('userAcces:admin')->group(function () {
            Route::resource('user', UserController::class);
        });
        Route::middleware('userAcces:user')->group(function () {
            Route::resource('koleksi', KoleksiController::class);
        });
        Route::prefix('pengaturan')->group(function () {
            Route::get('profil', [ProfilController::class, 'edit'])->name('profil.edit');
            Route::patch('profil', [ProfilController::class, 'update'])->name('profil.update');
            Route::delete('profil', [ProfilController::class, 'destroy'])->name('profil.destroy');
        });
    });
    Route::get('logout', [SessionController::class, 'logout'])->name('logout');
});

Route::get('', [HomeController::class, 'index'])->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('pustaka', [PustakaController::class, 'index'])
    ->name('pustaka.index');

Route::get('pustaka/{buku}', [PustakaController::class, 'show'])
    ->name('pustaka.show');

Route::resource('koleksi', KoleksiController::class);

Route::post('ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

Route::resource('pinjam', PinjamanController::class);
