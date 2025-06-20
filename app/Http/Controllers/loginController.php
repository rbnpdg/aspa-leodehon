<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginShow()
    {
        if (Auth::check()) { //redirect ke dashboard jiika sudah login
            return redirect()->route('dashboard');
        }
        
        return view('login');
    }

    public function login() {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session(['role' => $user->role]);

            $welcomeMessage = 'Selamat datang, ' . $user->nama . '!';

            if ($user->role === 'Admin') {
                return redirect('/admin/dashboard')->with('success', $welcomeMessage);
            } elseif ($user->role === 'User') {
                return redirect('/home')->with('success', $welcomeMessage);
            } else {
                return redirect('/login')->with('error', 'Role tidak dikenali');
            }
        }

        return back()->with('error', 'Email atau password salah');
    }
}
