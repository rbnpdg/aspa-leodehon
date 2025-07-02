<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* ---------- HALAMAN PUBLIK / TAMU ---------- */
Route::middleware('guest')->group(function () {
    Route::get('/login',  [LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/register', [loginController::class, 'showRegister'])->name('register');
    Route::post('/register', [loginController::class, 'register']);
});

/* ---------- HARUS LOGIN ---------- */
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [viewController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/edit', [viewController::class, 'showEdit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

/* ---------- Contoh dashboard ---------- */
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

