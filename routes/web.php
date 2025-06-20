<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\loginController;

//view route
Route::get('/login', [viewController::class, 'loginShow'])->name('show-login');
Route::get('/register', [viewcontroller::class, 'registerShow'])->name('show-register');
Route::get('/tentang-kami', [viewcontroller::class, 'tentangShow'])->name('show-tentang');

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Profile routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');
    
    Route::get('/edit-profil', function () {
        return view('edit-profil');
    })->name('edit-profil');
    
    Route::post('/logout', function () {
        auth()->logout();
        return redirect('/');
    })->name('logout');
});
