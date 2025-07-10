<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    public function show() {
        return view('email.index');
    }
}
