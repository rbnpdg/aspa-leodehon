<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:10048',
        ]);

        if ($request->hasFile('foto_profil')) {
            // hapus foto lama jika ada
            if ($user->foto_profil && Storage::exists($user->foto_profil)) {
                Storage::delete($user->foto_profil);
            }

            // simpan foto baru
            $validated['foto_profil'] = $request->file('foto_profil')->store('foto-profil', 'public');
        }

        $user->update($validated);

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }
}
