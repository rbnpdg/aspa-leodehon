<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function loginShow() {
        return view('login');
    }
    
    public function registerShow() {
        return view('register');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Asrama Putra Leo Dehon',
            'description' => 'Tempat tinggal yang nyaman dan kondusif untuk mendukung pendidikan dan pembentukan karakter mahasiswa',
            'facilities' => [
                [
                    'icon' => 'fas fa-bed',
                    'title' => 'Kamar Nyaman',
                    'description' => 'Kamar dengan fasilitas lengkap, AC, dan tempat tidur yang nyaman untuk istirahat optimal'
                ],
                [
                    'icon' => 'fas fa-wifi',
                    'title' => 'WiFi Gratis',
                    'description' => 'Akses internet cepat dan stabil di seluruh area asrama untuk mendukung aktivitas belajar'
                ],
                [
                    'icon' => 'fas fa-utensils',
                    'title' => 'Dapur Bersama',
                    'description' => 'Dapur lengkap dengan peralatan masak modern untuk kebutuhan memasak sehari-hari'
                ],
                [
                    'icon' => 'fas fa-book',
                    'title' => 'Ruang Belajar',
                    'description' => 'Ruang belajar yang tenang dan kondusif dengan fasilitas meja, kursi, dan pencahayaan yang baik'
                ],
                [
                    'icon' => 'fas fa-car',
                    'title' => 'Parkir Aman',
                    'description' => 'Area parkir yang luas dan aman dengan sistem keamanan 24 jam untuk kendaraan penghuni'
                ],
                [
                    'icon' => 'fas fa-shield-alt',
                    'title' => 'Keamanan 24 Jam',
                    'description' => 'Sistem keamanan terpadu dengan petugas jaga 24 jam untuk menjamin keamanan penghuni'
                ]
            ]
        ];
        
        return view('welcome', $data);
    }
}
