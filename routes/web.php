<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('tampilan.login');
});

// === ROUTE AUTH (TIDAK PERLU LOGIN) ===
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// === ROUTE PROTECTED (HANYA BISA DIAKSES SETELAH LOGIN) ===
Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');


Route::get('/jacket', function () {
    return view('tampilan.jacket');
});

//Categoryy
Route::get('/pants', function () {
    return view('tampilan.pants');
})->name('pants');
Route::get('/shirt', function () {
    return view('tampilan.shirt');
})->name('shirt');

Route::get('/profile', function () {
    return view('tampilan.profile');
})->name('profile'); // Tambahkan ini

Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
});