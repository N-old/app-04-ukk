<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/book', function () {
    return view('book');
});
Route::get('/profil', function () {
    return view('profile');
});
Route::get('/login', function () {
    return view('partials.login');
});
Route::get('/register', function () {
    return view('partials.register');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/dashboard/data-table', function () {
    return view('dashboard.partials.data-table');
});
Route::get('/dashboard/card-data', function () {
    return view('dashboard.partials.card-data');
});
Route::get('/dashboard/form', function () {
    return view('dashboard.partials.form');
});
