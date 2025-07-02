<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class viewController extends Controller
{
    public function showLogin() {
        return view('login');
    }
    
    public function showRegister() {
        return view('register');
    }

    public function tentangShow() {
        return view('tentang');
    }

    public function adminDashboard(): View
    {
        // Saya memindahkan logika Anda ke sini dan menambahkannya
       $jumlahSiswa = Siswa::count();

        $jumlahEvent = TryoutEvent::count();
        $jumlahPengguna = User::whereHas('roles', function ($query) {
            $query->where('name', 'user');
        })->count();

        // Mengirim data ke view 'admin.dashboard'
        return view('admin.dashboard', compact('jumlahSiswa', 'jumlahEvent', 'jumlahPengguna'));
    }

    public function showProfile()
    {
        $user = Auth::user();          // user aktif
        return view('siswa.profile.index', compact('user'));
    }

    public function showEdit()
    {
        $user = Auth::user();          // user aktif
        return view('siswa.profile.edit', compact('user'));
    }
}
