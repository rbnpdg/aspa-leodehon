<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;


Route::get('/login', [viewController::class, 'loginShow'])->name('show-login');
Route::get('/register', [viewcontroller::class, 'registerShow'])->name('show-register');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/visi-misi', function () {
    return view('visi-misi');
})->name('visi-misi');

Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

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
