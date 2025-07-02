<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    /**
     * Proses autentikasi.
     */
    public function login(Request $request)
    {
        /* ---------- Validasi awal ---------- */
        $validator = Validator::make($request->all(), [
            'email'    => 'required|string',   // bisa email ATAU username
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        /* ---------- Cari user berdasarkan email / username ---------- */
        $credentialInput = $request->email;
        $credentialField = filter_var($credentialInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $user = User::where($credentialField, $credentialInput)
                    ->where('is_active', true)   // hanya user aktif
                    ->first();

        /* ---------- Cek user & password ---------- */
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Email / username atau password salah.',
            ])->withInput();
        }

        /* ---------- Login & buat sesi ---------- */
        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        /* ---------- Redirect ---------- */
        return redirect()->intended(route('home'))
                         ->with('success', 'Selamat datang, ' . $user->name . '!');
    }

    /* ---------- PROSES REGISTER ---------- */
    public function register(Request $request)
    {
        /* 1. Validasi input */
        $validator = Validator::make($request->all(), [
            'name'                  => 'required|string|max:100',
            'username'              => 'required|string|max:30|alpha_dash|unique:users,username',
            'email'                 => 'required|email|max:150|unique:users,email',
            'password'              => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        /* 2. Simpan user */
        $user = User::create([
            'id'         => (string) Str::uuid(),
            'name'       => $request->name,
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => $request->password,
            'is_active'  => true,               // atau default di migration
            'foto_profil'=> null,
        ]);

        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil, selamat datang!');

        // --- atau arahkan ke halaman login:
        return redirect()->route('login')
                         ->with('success', 'Registrasi berhasil, silakan login.');
    }

    /**
     * Logout (POST).
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // hapus sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Berhasil Logout!');
    }
}
