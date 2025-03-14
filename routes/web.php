<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PraloginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GadgetsController;
use App\Http\Controllers\CategoriesController;

// Homepage //
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// Halaman Pralogin //
Route::get('/pralogin', [PraloginController::class, 'pralogin'])->name('pralogin');

// Halaman Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Halaman Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Dashboard (harus login)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Halaman User
Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user.home')->middleware('auth');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.gadgets.dashboard')->middleware('auth');
// Halaman Gadgets
Route::get('/admin/gadgets', [AdminController::class, 'gadgets'])->name('admin.gadgets')->middleware('auth');
// Halaman Edit & Delete
Route::post('/admin/gadgets', [GadgetsController::class, 'store'])->name('gadgets.store');
Route::get('/admin/gadgets/{id}/edit', [GadgetsController::class, 'edit'])->name('admin.gadgets.edit')->middleware('auth');
Route::put('/admin/gadgets/{id}', [GadgetsController::class, 'update'])->name('admin.gadgets.update')->middleware('auth');
Route::delete('/admin/gadgets/{id}', [GadgetsController::class, 'destroy'])->name('admin.gadgets.destroy')->middleware('auth');
// Halaman Tambah Produk
Route::prefix('admin')->group(function () {
    Route::get('/gadgets/create', [GadgetsController::class, 'create'])->name('admin.gadgets.create');
    Route::post('/gadgets/store', [GadgetsController::class, 'store'])->name('admin.gadgets.store');
});
// Halaman Categories
Route::get('/admin/categories', [CategoriesController::class, 'categories'])->name('admin.categories.index')->middleware('auth');
