<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrama Putra Leo Dehon</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo-yayasan-cropped.png') }}">

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0539FF',
                        secondary: '#ffffff'
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Navbar underline animation */
        .nav-link {
            position: relative;
            display: inline-block;
            padding-bottom: 4px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #0539FF;
            transition: all 0.3s ease-in-out;
            transform: translateX(-50%);
        }
        .nav-link:hover::after { width: 100%; }
        .nav-link:hover { color: #0539FF; }

        /* Mobile‑menu enter animation */
        .mobile-menu-enter { opacity: 0; transform: translateY(-10px); }
        .mobile-menu-enter-active { opacity: 1; transform: translateY(0); }

        .dropdown-link{
            position: relative;
            overflow: hidden;
            display: block;
            padding: 0.5rem 1rem;      /* py-2 px-4 */
            font-size: 0.875rem;       /* text-sm */
            color: #374151;            /* text-gray-700 */
            white-space: nowrap;
            transition: color .3s ease;
            z-index: 1;
        }

        .dropdown-link::before{
            content:'';
            position:absolute;
            inset:0;                   /* top/right/bottom/left:0 */
            width:0;                   /* mulai tersembunyi */
            background:#0539FF;        /* warna solid (primary) */
            opacity:.85;               /* transparan sedikit */
            transition:width .35s ease;
            z-index:-1;                /* di bawah teks */
        }

        .dropdown-link:hover::before{
            width:100%;                /* swipe L→R */
        }

        .dropdown-link:hover{
            color:#fff;
        }

        .dropdown-link-red {
            color: #dc2626 !important;
        }

        .dropdown-link-red::before {
            background: #dc2626;
        }

        .dropdown-link-red:hover {
            color: white !important;
        }
    </style>
</head>

<body class="bg-white w-full overflow-x-hidden">

<!-- ========== NAVBAR ========== -->
<nav class="bg-white shadow-lg border-b-2 border-primary fixed top-0 z-30 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <img src="{{ asset('img/logo-aspa.png') }}" alt="Logo" class="h-16 mr-3">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 absolute left-1/2 transform -translate-x-1/2">
                <a href="#beranda"  class="nav-link text-gray-700 font-medium transition-colors">Beranda</a>
                <a href="#fasilitas" class="nav-link text-gray-700 font-medium transition-colors">Fasilitas</a>
                <a href="#kegiatan"  class="nav-link text-gray-700 font-medium transition-colors">Kegiatan</a>
                <a href="#visi-misi" class="nav-link text-gray-700 font-medium transition-colors">Visi Misi</a>
                <a href="#sejarah"  class="nav-link text-gray-700 font-medium transition-colors">Sejarah</a>
            </div>

            <!-- Desktop Right Section -->
            <div class="hidden md:flex items-center space-x-3 relative">
                @auth
                    <span class="text-gray-700 font-medium">Halo, {{ Auth::user()->name }}!</span>

                    <!-- Foto profil -->
                    <button id="profileButton" class="flex items-center">
                        <img src="{{ Auth::user()   ->foto_profil ? Storage::url(Auth::user()->foto_profil) : asset('img/pp.png') }}" alt="foto"
                             class="h-12 w-12 rounded-full border-2 border-primary">
                    </button>

                    <!-- DROPDOWN -->
                    <div id="profileDropdown"
                         class="absolute right-0 top-20 w-48 bg-white rounded-md shadow-lg border border-gray-200 hidden z-40">
                        <a href="{{ route('profile.show') }}"
                           class="dropdown-link">
                            <i class="fas fa-user mr-2"></i>Profil
                        </a>
                        <a href="#edit-profil"
                           class="dropdown-link">
                            <i class="fas fa-edit mr-2"></i>LPK Airlangga
                        </a>
                        <hr class="my-1">
                        <form method="POST" class="dropdown-link dropdown-link-red" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                       class="flex items-center px-4 py-2 border-2 border-primary text-primary rounded-full
                              hover:bg-primary hover:text-white transition">
                        <b>Login</b>
                    </a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobileMenuButton"
                        class="text-gray-700 me-4 hover:text-primary transition-colors duration-200">
                    <i id="mobileMenuIcon" class="fas fa-bars text-xl transition-transform duration-300"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu"
                 class="md:hidden hidden absolute right-2 top-16 bg-white shadow-lg border rounded-lg z-50 w-64 mobile-menu-enter">
                <div class="px-4 py-4 space-y-4">
                    <a href="#beranda"   class="mobile-nav-link text-gray-700 font-medium block text-xl">Beranda</a>
                    <a href="#fasilitas" class="mobile-nav-link text-gray-700 font-medium block text-xl">Fasilitas</a>
                    <a href="#kegiatan"  class="mobile-nav-link text-gray-700 font-medium block text-xl">Kegiatan</a>
                    <a href="#visi-misi" class="mobile-nav-link text-gray-700 font-medium block text-xl">Visi Misi</a>
                    <a href="#sejarah"   class="mobile-nav-link text-gray-700 font-medium block text-xl">Sejarah</a>

                    <div class="border-t border-gray-200 pt-3 mt-3">
                        @auth
                            <a href="{{ route('profile.show')}}"
                               class="mobile-nav-link block text-gray-700 text-xl font-medium">
                                <i class="fas fa-user mr-2"></i>Profil
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full text-left text-xl font-medium py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                               class="mobile-nav-link text-blue-600 text-xl font-medium hover:text-blue-800">
                                <i class="fas fa-sign-in-alt mr-2"></i>Login
                            </a>
                        @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
<!-- ========== /NAVBAR ========== -->

<main class="overflow-hidden">
    @yield('content')
</main>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
          .path-0{
            animation:pathAnim-0 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-0{
            0%{
              d: path("M 0,400 L 0,75 C 106.99521531100476,82.77990430622009 213.9904306220095,90.5598086124402 317,98 C 420.0095693779905,105.4401913875598 519.0334928229667,112.54066985645932 612,97 C 704.9665071770333,81.45933014354068 791.8755980861245,43.2775119617225 867,40 C 942.1244019138755,36.7224880382775 1005.4641148325359,68.34928229665071 1099,80 C 1192.5358851674641,91.65071770334929 1316.267942583732,83.32535885167465 1440,75 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,75 C 105.55023923444975,85.18181818181819 211.1004784688995,95.36363636363636 300,89 C 388.8995215311005,82.63636363636364 461.1483253588517,59.727272727272734 566,54 C 670.8516746411483,48.272727272727266 808.3062200956939,59.72727272727272 910,71 C 1011.6937799043061,82.27272727272728 1077.6267942583731,93.36363636363636 1160,94 C 1242.3732057416269,94.63636363636364 1341.1866028708134,84.81818181818181 1440,75 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,75 C 90.29665071770336,96.04306220095694 180.59330143540672,117.08612440191386 289,107 C 397.4066985645933,96.91387559808614 523.9234449760764,55.69856459330145 618,55 C 712.0765550239236,54.30143540669855 773.7129186602872,94.11961722488037 870,102 C 966.2870813397128,109.88038277511963 1097.2248803827752,85.82296650717703 1198,76 C 1298.7751196172248,66.17703349282297 1369.3875598086124,70.58851674641149 1440,75 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,75 C 115.11961722488039,55.899521531100476 230.23923444976077,36.79904306220096 327,49 C 423.7607655502392,61.20095693779904 502.16267942583727,104.70334928229666 588,101 C 673.8373205741627,97.29665071770334 767.1100478468901,46.38755980861244 859,46 C 950.8899521531099,45.61244019138756 1041.3971291866028,95.7464114832536 1138,109 C 1234.6028708133972,122.2535885167464 1337.3014354066986,98.6267942583732 1440,75 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,75 C 106.99521531100476,82.77990430622009 213.9904306220095,90.5598086124402 317,98 C 420.0095693779905,105.4401913875598 519.0334928229667,112.54066985645932 612,97 C 704.9665071770333,81.45933014354068 791.8755980861245,43.2775119617225 867,40 C 942.1244019138755,36.7224880382775 1005.4641148325359,68.34928229665071 1099,80 C 1192.5358851674641,91.65071770334929 1316.267942583732,83.32535885167465 1440,75 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,75 C 106.99521531100476,82.77990430622009 213.9904306220095,90.5598086124402 317,98 C 420.0095693779905,105.4401913875598 519.0334928229667,112.54066985645932 612,97 C 704.9665071770333,81.45933014354068 791.8755980861245,43.2775119617225 867,40 C 942.1244019138755,36.7224880382775 1005.4641148325359,68.34928229665071 1099,80 C 1192.5358851674641,91.65071770334929 1316.267942583732,83.32535885167465 1440,75 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#0539ff" fill-opacity="0.4" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><style>
          .path-1{
            animation:pathAnim-1 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-1{
            0%{
              d: path("M 0,400 L 0,175 C 129.85645933014354,184.6937799043062 259.7129186602871,194.38755980861242 340,191 C 420.2870813397129,187.61244019138758 451.0047846889952,171.14354066985646 532,173 C 612.9952153110048,174.85645933014354 744.2679425837321,195.0382775119617 857,193 C 969.7320574162679,190.9617224880383 1063.9234449760766,166.70334928229667 1158,160 C 1252.0765550239234,153.29665071770333 1346.0382775119617,164.14832535885165 1440,175 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,175 C 77.20574162679426,173.48803827751198 154.41148325358853,171.97607655502392 244,179 C 333.58851674641147,186.02392344497608 435.55980861244007,201.58373205741626 539,206 C 642.4401913875599,210.41626794258374 747.3492822966507,203.68899521531102 849,192 C 950.6507177033493,180.31100478468898 1049.043062200957,163.6602870813397 1147,160 C 1244.956937799043,156.3397129186603 1342.4784688995214,165.66985645933016 1440,175 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,175 C 118.33492822966508,177.10526315789474 236.66985645933016,179.21052631578945 325,186 C 413.33014354066984,192.78947368421055 471.6555023923445,204.26315789473688 550,209 C 628.3444976076555,213.73684210526312 726.7081339712918,211.73684210526315 842,211 C 957.2918660287082,210.26315789473685 1089.5119617224882,210.78947368421052 1192,205 C 1294.4880382775118,199.21052631578948 1367.244019138756,187.10526315789474 1440,175 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,175 C 116.33492822966505,175.47846889952154 232.6698564593301,175.95693779904306 317,173 C 401.3301435406699,170.04306220095694 453.6555023923446,163.65071770334927 550,167 C 646.3444976076554,170.34928229665073 786.7081339712919,183.4401913875598 902,179 C 1017.2918660287081,174.5598086124402 1107.511961722488,152.5885167464115 1193,149 C 1278.488038277512,145.4114832535885 1359.244019138756,160.20574162679424 1440,175 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,175 C 129.85645933014354,184.6937799043062 259.7129186602871,194.38755980861242 340,191 C 420.2870813397129,187.61244019138758 451.0047846889952,171.14354066985646 532,173 C 612.9952153110048,174.85645933014354 744.2679425837321,195.0382775119617 857,193 C 969.7320574162679,190.9617224880383 1063.9234449760766,166.70334928229667 1158,160 C 1252.0765550239234,153.29665071770333 1346.0382775119617,164.14832535885165 1440,175 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,175 C 129.85645933014354,184.6937799043062 259.7129186602871,194.38755980861242 340,191 C 420.2870813397129,187.61244019138758 451.0047846889952,171.14354066985646 532,173 C 612.9952153110048,174.85645933014354 744.2679425837321,195.0382775119617 857,193 C 969.7320574162679,190.9617224880383 1063.9234449760766,166.70334928229667 1158,160 C 1252.0765550239234,153.29665071770333 1346.0382775119617,164.14832535885165 1440,175 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#0539ff" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-1"></path><style>
          .path-2{
            animation:pathAnim-2 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-2{
            0%{
              d: path("M 0,400 L 0,275 C 105.13875598086125,272.17703349282294 210.2775119617225,269.35406698564594 298,275 C 385.7224880382775,280.64593301435406 456.02870813397135,294.7607655502393 540,287 C 623.9712918660287,279.2392344497607 721.6076555023924,249.6028708133971 825,240 C 928.3923444976076,230.3971291866029 1037.5406698564593,240.8277511961723 1141,250 C 1244.4593301435407,259.1722488038277 1342.2296650717703,267.0861244019138 1440,275 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,275 C 110.38277511961724,265.50717703349284 220.76555023923447,256.0143540669857 322,258 C 423.23444976076553,259.9856459330143 515.3205741626795,273.4497607655502 607,281 C 698.6794258373205,288.5502392344498 789.9521531100477,290.1866028708134 891,290 C 992.0478468899523,289.8133971291866 1102.8708133971293,287.80382775119614 1196,285 C 1289.1291866028707,282.19617224880386 1364.5645933014353,278.5980861244019 1440,275 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,275 C 96.88038277511961,273.8421052631579 193.76076555023923,272.6842105263158 297,267 C 400.2392344497608,261.3157894736842 509.83732057416285,251.10526315789474 611,259 C 712.1626794258372,266.89473684210526 804.88995215311,292.89473684210526 880,296 C 955.11004784689,299.10526315789474 1012.6028708133972,279.3157894736842 1103,272 C 1193.3971291866028,264.6842105263158 1316.6985645933014,269.8421052631579 1440,275 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,275 C 80.32535885167462,270.311004784689 160.65071770334924,265.62200956937795 249,256 C 337.34928229665076,246.37799043062202 433.72248803827756,231.82296650717703 544,242 C 654.2775119617224,252.17703349282297 778.4593301435407,287.0861244019138 887,303 C 995.5406698564593,318.9138755980862 1088.44019138756,315.8325358851675 1178,308 C 1267.55980861244,300.1674641148325 1353.77990430622,287.5837320574162 1440,275 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,275 C 105.13875598086125,272.17703349282294 210.2775119617225,269.35406698564594 298,275 C 385.7224880382775,280.64593301435406 456.02870813397135,294.7607655502393 540,287 C 623.9712918660287,279.2392344497607 721.6076555023924,249.6028708133971 825,240 C 928.3923444976076,230.3971291866029 1037.5406698564593,240.8277511961723 1141,250 C 1244.4593301435407,259.1722488038277 1342.2296650717703,267.0861244019138 1440,275 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,275 C 105.13875598086125,272.17703349282294 210.2775119617225,269.35406698564594 298,275 C 385.7224880382775,280.64593301435406 456.02870813397135,294.7607655502393 540,287 C 623.9712918660287,279.2392344497607 721.6076555023924,249.6028708133971 825,240 C 928.3923444976076,230.3971291866029 1037.5406698564593,240.8277511961723 1141,250 C 1244.4593301435407,259.1722488038277 1342.2296650717703,267.0861244019138 1440,275 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#0539ff" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-2"></path></svg>
    <footer class="bg-primary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Asrama Putra Leo Dehon</h3>
                    <p class="text-blue-100 mb-4">
                        Tempat para remaja katolik dibimbing menuju kedewasaan 
                        dalam iman maupun kepribadian.
                    </p>
                    <div class="flex space-x-4">
                        <a target="_blank" href="#" class="text-blue-100 hover:text-white transition-colors duration-200">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/aspaleodehon/" class="text-blue-100 hover:text-white transition-colors duration-200">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/c/AsramaPutraLeoDehon" class="text-blue-100 hover:text-white transition-colors duration-200">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-4">Kontak</h3>
                    <div class="space-y-2 text-blue-100">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Jl. Semeru No. 57, Kota Metro, Lampung</p>
                        <p><i class="fas fa-phone mr-2"></i>+62 123 456 7890</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@asramaleodhon.com</p>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold mb-4">Menu Cepat</h3>
                    <ul class="space-y-2 text-blue-100">
                        <li><a href="#beranda" class="hover:text-white transition-colors duration-200">Beranda</a></li>
                        <li><a href="#fasilitas" class="hover:text-white transition-colors duration-200">Fasilitas</a></li>
                        <li><a href="#kegiatan" class="hover:text-white transition-colors duration-200">Kegiatan</a></li>
                        <li><a href="#visi-misi" class="hover:text-white transition-colors duration-200">Visi Misi</a></li>
                        <li><a href="#sejarah" class="hover:text-white transition-colors duration-200">Sejarah</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-blue-400 mt-8 pt-8 text-center text-blue-100">
                <p>&copy; 2025 Asrama Putra Leo Dehon. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>

    <script>
        /* ---------- Dropdown profil ---------- */
        const profileButton   = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton?.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            if (!profileDropdown.classList.contains('hidden')) {
                profileDropdown.classList.add('hidden');
            }
        });

        /* ---------- Mobile menu ---------- */
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu       = document.getElementById('mobileMenu');
        const mobileMenuIcon   = document.getElementById('mobileMenuIcon');

        mobileMenuButton?.addEventListener('click', () => {
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('mobile-menu-enter-active');
                mobileMenuIcon.classList.add('rotate-90');
            } else {
                mobileMenu.classList.remove('mobile-menu-enter-active');
                mobileMenuIcon.classList.remove('rotate-90');
                setTimeout(() => mobileMenu.classList.add('hidden'), 300);
            }
        });

        /* ---------- Smooth scroll & auto‑close mobile menu ---------- */
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target?.scrollIntoView({ behavior: 'smooth', block: 'start' });

                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('mobile-menu-enter-active');
                    mobileMenuIcon.classList.remove('rotate-90');
                    setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                }
            });
        });

        /* ---------- Close mobile menu jika klik di luar ---------- */
        document.addEventListener('click', (e) => {
            if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.remove('mobile-menu-enter-active');
                    mobileMenuIcon.classList.remove('rotate-90');
                    setTimeout(() => mobileMenu.classList.add('hidden'), 300);
                }
            }
        });
    </script>
</body>
</html>