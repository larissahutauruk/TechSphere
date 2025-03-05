<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PraloginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GadgetsController;

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

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
// Halaman Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
// Halaman Categories
Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories')->middleware('auth');
// Halaman Gadgets
Route::get('/admin/gadgets', [AdminController::class, 'gadgets'])->name('admin.gadgets')->middleware('auth');

// Halaman Edit & Delete
Route::get('/admin/gadgets/{id}/edit', [GadgetsController::class, 'edit'])->name('admin.gadgets.edit')->middleware('auth');
Route::put('/admin/gadgets/{id}', [GadgetsController::class, 'update'])->name('admin.gadgets.update')->middleware('auth');
Route::delete('/admin/gadgets/{id}', [GadgetsController::class, 'destroy'])->name('admin.gadgets.destroy')->middleware('auth');
