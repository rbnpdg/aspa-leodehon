<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Asrama Putra Leo Dehon') }}</title>

    <!-- Fonts & Tailwind -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo-aspa.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family:'Inter',sans-serif;
        }

        .animate-fade-in {
            animation:fadeIn .5s ease-in-out;
        }

        @keyframes fadeIn {
            from{
                opacity:0;
                transform:translateY(10px)}to{opacity:1;
                    transform:translateY(0)
            }
        }

        .custom-scrollbar::-webkit-scrollbar {
            width:4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background:#f1f1f1;
            border-radius:10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background:#0539FF;
            border-radius:10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background:#0429CC;
        }

        .sidebar-link {
            position:relative;
            overflow:hidden;
            display:flex;
            align-items:center;
            padding:.5rem 1rem;
            border-radius:.5rem;
            color:#4B5563;
            transition:color .3s ease;
            z-index:1
        }

        .sidebar-link::before {
            content:'';
            position:absolute;
            top:0;
            left:0;
            height:100%;
            width:0;
            background:linear-gradient(to right,#0539FF,#9333ea);
            opacity:.8;
            transition:width .9s ease;
            z-index:-1
        }

        .sidebar-link:hover::before {
            width:100%;
        }
        
        .sidebar-link:hover {
            color:#fff;
        }

        .gradient-hover-button {position:relative;
            overflow:hidden;
            background:linear-gradient(90deg,#0539FF 0%,#9333ea 100%);
            color:#fff;
            padding:.5rem 1rem;
            border-radius:.5rem;
            font-size:.875rem;
            font-weight:500;
            display:inline-flex;
            align-items:center;
            gap:.25rem;
            transition:transform .3s ease,box-shadow .3s ease;
            box-shadow:0 4px 10px rgba(0,0,0,.15)
        }
        
        .gradient-hover-button::before {
            content:'';
            position:absolute;
            inset:0;
            background:linear-gradient(135deg,#9333ea 0%,#DC2626 100%);
            opacity:0;
            transition:opacity .3s ease;
            z-index:-1
        }
        
        .gradient-hover-button:hover::before {
            opacity:1;
        }
        
        .gradient-hover-button:hover {
            transform:translateY(-2px);
            box-shadow:0 10px 25px rgba(0,0,0,.2);
        }
        
        .btn {
            position:relative;
            display:inline-flex;
            align-items:center;
            gap:.25rem;
            padding:.5rem 1rem;
            font-size:.875rem;
            font-weight:500;
            color:#fff;
            border-radius:.5rem;
            transition:transform .25s ease,box-shadow .25s ease;
            z-index:10;
        }
        
        .btn:hover {
            transform:translateY(-3px);
            box-shadow:0 8px 20px rgba(0,0,0,.2);
        }
        
        .btn-red {
            background:linear-gradient(90deg,#dc2626 0%,#f87171 100%);
        }
        
        .btn-blue {
            background:linear-gradient(90deg,#0539ff 0%,#2563eb 100%);
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50 antialiased">
<div id="app" class="min-h-screen flex">

    <!-- === Burger button (mobile only) === -->
    <button id="burgerBtn" class="lg:hidden fixed top-4 right-4 z-50 p-2 rounded-md bg-white shadow focus:outline-none transition-transform duration-300">
        <div class="relative w-6 h-6">
            <!-- bars icon -->
            <svg id="iconBars" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-6 h-6 text-gray-700 transition-all duration-300 ease-in-out scale-100 opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- X icon -->
            <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 w-6 h-6 text-gray-700 transition-all duration-300 ease-in-out scale-0 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </button>

    <!-- === Sidebar === -->
    @include('layout.sidebar')

    <!-- Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

    <!-- === Page content === -->
    <main class="flex-1 lg:ml-64 animate-fade-in">
        @yield('content')
    </main>
</div>

<script>
    const sidebar   = document.getElementById('sidebar');
    const burgerBtn = document.getElementById('burgerBtn');
    const overlay   = document.getElementById('sidebarOverlay');
    const closeBtn  = document.getElementById('closeSidebarBtn');
    const iconBars  = document.getElementById('iconBars');
    const iconClose = document.getElementById('iconClose');

    const openSidebar = () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        iconBars.classList.replace('scale-100','scale-0');
        iconBars.classList.replace('opacity-100','opacity-0');
        iconClose.classList.replace('scale-0','scale-100');
        iconClose.classList.replace('opacity-0','opacity-100');
    };

    const closeSidebar = () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        iconClose.classList.replace('scale-100','scale-0');
        iconClose.classList.replace('opacity-100','opacity-0');
        iconBars.classList.replace('scale-0','scale-100');
        iconBars.classList.replace('opacity-0','opacity-100');
    };

    burgerBtn?.addEventListener('click', () => {
        if(sidebar.classList.contains('-translate-x-full')){
            openSidebar();
        } else {
            closeSidebar();
        }
    });

    overlay?.addEventListener('click', closeSidebar);
    closeBtn?.addEventListener('click', closeSidebar);
</script>
@stack('scripts')
</body>
</html>