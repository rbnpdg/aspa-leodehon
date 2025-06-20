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

    public function tentangShow() {
        return view('tentang');
    }
}
