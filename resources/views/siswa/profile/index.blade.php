{{-- resources/views/siswa/profile/index.blade.php (simplified extract) --}}
@extends('layout.profile')

@section('title', 'Profile')

@section('content')
<div class="min-h-screen bg-gray-50">
    {{-- ===== Banner ===== --}}
    <div class="relative">
        <div class="relative h-48 md:h-56 lg:h-60 mx-4 md:mx-6 overflow-hidden rounded-b-xl">
            <img src="{{ asset('img/curved14.jpg') }}" class="absolute inset-0 w-full h-full object-cover" alt="Banner">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0539FF]/60 via-purple-600/60 to-pink-500/60"></div>
        </div>

        {{-- ===== Profile Card ===== --}}
        <div class="w-11/12 md:w-[94%] mx-auto px-4 md:px-6 py-0">
            <div class="relative -mt-16 md:-mt-16 bg-transparent shadow-xl rounded-2xl overflow-hidden px-6 md:px-8 py-6 backdrop-blur-xl border border-white/20">

                {{-- glass layer --}}
                <div class="absolute inset-0 bg-gradient-to-tr from-white/30 via-pink-100/20 to-purple-100/15"></div>

                {{-- card content --}}
                <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">

                    {{-- FOTO + INFO --}}
                    <div class="flex items-center space-x-4 flex-1 min-w-0">
                        <img src="{{ $user->foto_profil ? Storage::url($user->foto_profil) : asset('img/pp.png') }}" alt="foto"
                             class="w-20 h-20 rounded-full object-cover border-4 border-white/50 shadow-lg">

                        <div class="min-w-0">
                            <h2 class="text-xl font-semibold text-gray-800 truncate">{{ $user->name ?? 'Alec Thompson' }}</h2>
                            <p class="text-sm text-gray-600 truncate">{{ $user->username ?? 'CEO / Co‑Founder' }}</p>
                        </div>
                    </div>

                    {{-- TOMBOL EDIT --}}
                    <a href="{{ route('profile.edit') }}"
                       class="gradient-hover-button relative flex items-center gap-1 px-4 py-2 text-sm font-medium text-white rounded-lg transition-all duration-300 md:ml-6">
                        Edit Profil
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== Detail Form ===== --}}
    <div class="px-4 md:px-6 py-8">
        <div class="bg-white rounded-2xl shadow-sm p-6 md:p-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Detail</h3>
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                        <input readonly value="{{ $user->name }}" class="w-full px-4 py-3 bg-gray-100 border-gray-200 rounded-lg cursor-not-allowed">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input readonly value="{{ $user->email }}" class="w-full px-4 py-3 bg-gray-100 border-gray-200 rounded-lg cursor-not-allowed">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                        <input readonly value="{{ $user->username }}" class="w-full px-4 py-3 bg-gray-100 border-gray-200 rounded-lg cursor-not-allowed">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
