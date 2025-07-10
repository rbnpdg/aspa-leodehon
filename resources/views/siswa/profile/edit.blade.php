{{-- resources/views/siswa/profile/index.blade.php (responsive) --}}
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
        <div class="w-11/12 md:w-[94%] mx-auto px-4 md:px-6">
            <div class="relative -mt-16 md:-mt-12 bg-transparent shadow-xl rounded-2xl overflow-hidden px-6 md:px-8 py-6 backdrop-blur-xl border border-white/20">

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

                    {{-- BATAL & SIMPAN sejajar di semua ukuran --}}
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('profile.show') }}" class="btn btn-red">Batal</a>
                        <button type="submit" form="profileForm" class="btn btn-blue">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== Detail Form ===== --}}
    <div class="px-6 py-8">
        <div class="bg-white rounded-2xl shadow-sm p-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Detail</h3>
            <form action="{{ route('profile.update') }}" id="profileForm" method="POST" class="space-y-6" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                        <input id="name" name="name" value="{{ old('name', $user->name) }}"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0539FF] focus:border-transparent" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0539FF] focus:border-transparent" />
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                        <input id="username" name="username" value="{{ old('username', $user->username) }}"
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#0539FF] focus:border-transparent" />
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Password (Opsional)" class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#0539FF] focus:border-transparent placeholder-gray-500 pr-12 transition-all duration-200">
                            <button
                                type="button"
                                onclick="togglePassword()"
                                class="absolute right-4 top-1/2 -translate-y-1/2
                                    text-gray-400 hover:text-gray-600 transition-colors"
                                aria-label="Toggle password visibility"
                            >
                                <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7
                                            -1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Foto Profil</label>
                        <input type="file" name="foto_profil"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
function togglePassword() {
    const input    = document.getElementById('password');
    const eyeIcon  = document.getElementById('eye-icon');
    const isHidden = input.type === 'password';

    input.type = isHidden ? 'text' : 'password';

    // ganti ikon
    eyeIcon.innerHTML = isHidden
        ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7
                    a9.993 9.993 0 012.142-3.592m3.292-2.413A9.956 9.956 0 0112 5
                    c4.478 0 8.268 2.943 9.542 7a9.993 9.993 0 01-4.05 5.166M15 12
                    a3 3 0 11-6 0 3 3 0 016 0z" />
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M3 3l18 18" />`
        : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7
                    -1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
}
</script>
@endsection
