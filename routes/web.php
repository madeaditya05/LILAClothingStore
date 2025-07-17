<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('tampilan.login');
});

// === ROUTE AUTH (TIDAK PERLU LOGIN) ===
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// === ROUTE PROTECTED (HANYA BISA DIAKSES SETELAH LOGIN) ===
Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/jacket', function () {
    return view('tampilan.jacket');
});