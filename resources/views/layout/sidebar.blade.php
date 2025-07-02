{{-- layouts/sidebar.blade.php --}}
<aside id="sidebar"
       class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-50 shadow-lg
              transform lg:translate-x-0 -translate-x-full transition-transform
              custom-scrollbar overflow-y-auto">

    <div class="flex items-center justify-center h-16 px-4 border-b">
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center">
                <img src="{{ asset('img/logo-aspa.png') }}" alt="">
            </div>
            <div>
                <h1 class="text-sm font-semibold text-gray-800">Asrama Putra</h1>
                <p class="text-xs text-gray-500">Leo Dehon</p>
            </div>
        </div>
    </div>

    <nav class="mt-8 px-4 space-y-2">

        {{-- === Dashboard  ================================================= --}}
        <a href="{{ route('home') }}"
           class="sidebar-link flex items-center px-4 py-2 text-gray-600 rounded-lg hover:bg-gray-100">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
            </svg>
            Beranda
        </a>

        <a href="#"
           class="flex items-center px-4 py-2 text-white bg-gradient-to-r from-[#0539FF] to-purple-600 rounded-lg">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
            Profil
        </a>

        <a href="#"
           class="sidebar-link flex items-center px-4 py-2 text-gray-600 rounded-lg hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
            </svg>
            LPK Airlangga
        </a>
    </nav>
</aside>
