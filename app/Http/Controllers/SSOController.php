<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SSOController extends Controller
{
    public function ssoAirlangga(Request $request)
    {
        $user = Auth::user();

        if (!$user || !$user->inInstitution('airlangga')) {
            return back()->with('error', 'Anda tidak diizinkan mengakses LPK.');
        }


        $token = encrypt([
            'email' => $user->email,
            'timestamp' => now()->timestamp,
        ]);

        return redirect()->away('http://airlangga.test/sso-login?token=' . urlencode($token));
    }
}
