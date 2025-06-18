@extends('layout.app')

@section('content')
    <section id="beranda" class="relative text-white h-[32rem] sm:h-[36rem] md:h-[40rem] lg:h-[44rem] xl:h-[48rem]">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div id="carouselImages" class="flex w-full h-full transition-transform duration-700">
                <img src="{{ asset('img/gambar1.jpg') }}" alt="Gambar1" class="w-full flex-shrink-0 object-cover h-full">
                <img src="{{ asset('img/gambar2.jpg') }}" alt="Gambar2" class="w-full flex-shrink-0 object-cover h-full">
                <img src="{{ asset('img/gambar3.jpg') }}" alt="Gambar3" class="w-full flex-shrink-0 object-cover h-full">
            </div>

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-blue-600 opacity-60"></div>
        </div>  

        <!-- Konten Teks -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Selamat Datang di website<br>
                <span class="text-yellow-300">Asrama Putra Leo Dehon</span>
            </h1>
            <!-- <p class="text-xl md:text-2xl mb-8 max-w-3xl">
                Tempat tinggal yang nyaman dan kondusif untuk mendukung pendidikan dan pembentukan karakter mahasiswa
            </p> -->
            <div class="space-x-4">
                <button
                    class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-colors duration-200">
                    Pelajari Lebih Lanjut
                </button>
            </div>
        </div>
    </section>
    
    <section id="fasilitas" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fasilitas Unggulan</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Nikmati berbagai fasilitas modern yang mendukung kenyamanan dan produktivitas Anda
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kamar Nyaman</h3>
                    <p class="text-gray-600">Kamar dengan fasilitas lengkap, AC, dan tempat tidur yang nyaman untuk istirahat optimal</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">WiFi Gratis</h3>
                    <p class="text-gray-600">Akses internet cepat dan stabil di seluruh area asrama untuk mendukung aktivitas belajar</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Dapur Bersama</h3>
                    <p class="text-gray-600">Dapur lengkap dengan peralatan masak modern untuk kebutuhan memasak sehari-hari</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Ruang Belajar</h3>
                    <p class="text-gray-600">Ruang belajar yang tenang dan kondusif dengan fasilitas meja, kursi, dan pencahayaan yang baik</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Parkir Aman</h3>
                    <p class="text-gray-600">Area parkir yang luas dan aman dengan sistem keamanan 24 jam untuk kendaraan penghuni</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-200">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Keamanan 24 Jam</h3>
                    <p class="text-gray-600">Sistem keamanan terpadu dengan petugas jaga 24 jam untuk menjamin keamanan penghuni</p>
                </div>
            </div>
        </div>
    </section>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 170" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop><stop stop-color="rgba(5, 57, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,85L34.3,90.7C68.6,96,137,108,206,96.3C274.3,85,343,51,411,48.2C480,45,549,74,617,87.8C685.7,102,754,102,823,107.7C891.4,113,960,125,1029,124.7C1097.1,125,1166,113,1234,99.2C1302.9,85,1371,68,1440,56.7C1508.6,45,1577,40,1646,48.2C1714.3,57,1783,79,1851,85C1920,91,1989,79,2057,87.8C2125.7,96,2194,125,2263,136C2331.4,147,2400,142,2469,130.3C2537.1,119,2606,102,2674,87.8C2742.9,74,2811,62,2880,59.5C2948.6,57,3017,62,3086,73.7C3154.3,85,3223,102,3291,110.5C3360,119,3429,119,3497,124.7C3565.7,130,3634,142,3703,136C3771.4,130,3840,108,3909,102C3977.1,96,4046,108,4114,116.2C4182.9,125,4251,130,4320,127.5C4388.6,125,4457,113,4526,110.5C4594.3,108,4663,113,4731,121.8C4800,130,4869,142,4903,147.3L4937.1,153L4937.1,170L4902.9,170C4868.6,170,4800,170,4731,170C4662.9,170,4594,170,4526,170C4457.1,170,4389,170,4320,170C4251.4,170,4183,170,4114,170C4045.7,170,3977,170,3909,170C3840,170,3771,170,3703,170C3634.3,170,3566,170,3497,170C3428.6,170,3360,170,3291,170C3222.9,170,3154,170,3086,170C3017.1,170,2949,170,2880,170C2811.4,170,2743,170,2674,170C2605.7,170,2537,170,2469,170C2400,170,2331,170,2263,170C2194.3,170,2126,170,2057,170C1988.6,170,1920,170,1851,170C1782.9,170,1714,170,1646,170C1577.1,170,1509,170,1440,170C1371.4,170,1303,170,1234,170C1165.7,170,1097,170,1029,170C960,170,891,170,823,170C754.3,170,686,170,617,170C548.6,170,480,170,411,170C342.9,170,274,170,206,170C137.1,170,69,170,34,170L0,170Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop><stop stop-color="rgba(243, 244, 246, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,51L34.3,42.5C68.6,34,137,17,206,14.2C274.3,11,343,23,411,39.7C480,57,549,79,617,76.5C685.7,74,754,45,823,31.2C891.4,17,960,17,1029,14.2C1097.1,11,1166,6,1234,22.7C1302.9,40,1371,79,1440,96.3C1508.6,113,1577,108,1646,96.3C1714.3,85,1783,68,1851,56.7C1920,45,1989,40,2057,42.5C2125.7,45,2194,57,2263,70.8C2331.4,85,2400,102,2469,116.2C2537.1,130,2606,142,2674,144.5C2742.9,147,2811,142,2880,133.2C2948.6,125,3017,113,3086,107.7C3154.3,102,3223,102,3291,90.7C3360,79,3429,57,3497,62.3C3565.7,68,3634,102,3703,113.3C3771.4,125,3840,113,3909,113.3C3977.1,113,4046,125,4114,130.3C4182.9,136,4251,136,4320,113.3C4388.6,91,4457,45,4526,45.3C4594.3,45,4663,91,4731,96.3C4800,102,4869,68,4903,51L4937.1,34L4937.1,170L4902.9,170C4868.6,170,4800,170,4731,170C4662.9,170,4594,170,4526,170C4457.1,170,4389,170,4320,170C4251.4,170,4183,170,4114,170C4045.7,170,3977,170,3909,170C3840,170,3771,170,3703,170C3634.3,170,3566,170,3497,170C3428.6,170,3360,170,3291,170C3222.9,170,3154,170,3086,170C3017.1,170,2949,170,2880,170C2811.4,170,2743,170,2674,170C2605.7,170,2537,170,2469,170C2400,170,2331,170,2263,170C2194.3,170,2126,170,2057,170C1988.6,170,1920,170,1851,170C1782.9,170,1714,170,1646,170C1577.1,170,1509,170,1440,170C1371.4,170,1303,170,1234,170C1165.7,170,1097,170,1029,170C960,170,891,170,823,170C754.3,170,686,170,617,170C548.6,170,480,170,411,170C342.9,170,274,170,206,170C137.1,170,69,170,34,170L0,170Z"></path></svg>
    <section id="kegiatan" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kegiatan Asrama</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Berbagai kegiatan positif yang mendukung pengembangan diri dan mempererat tali persaudaraan
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-primary text-white rounded-lg p-8">
                    <h3 class="text-2xl font-semibold mb-4">Kegiatan Rutin</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            Kajian Keagamaan Mingguan
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            Olahraga Bersama
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            Diskusi dan Sharing Session
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle mr-3"></i>
                            Gotong Royong Kebersihan
                        </li>
                    </ul>
                </div>
                
                <div class="bg-gray-100 rounded-lg p-8">
                    <h3 class="text-2xl font-semibold mb-4 text-gray-900">Kegiatan Khusus</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <i class="fas fa-star text-primary mr-3"></i>
                            Pelatihan Soft Skills
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-star text-primary mr-3"></i>
                            Workshop dan Seminar
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-star text-primary mr-3"></i>
                            Kegiatan Sosial dan Bakti Sosial
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-star text-primary mr-3"></i>
                            Perayaan Hari Besar
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="visi-misi" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-lg shadow-lg p-8 h-96">
                    <div class="text-center mb-6">
                        <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">VISI</h3>
                    </div>
                    <p class="text-gray-700 text-lg leading-relaxed text-justify">
                        Asrama Putra Leo Dehon sebagai tempat mendidik, membimbing dan mendampingi 
                        serta melatih para remaja putra agar berkembang secara seimbang dalam íman, 
                        intelektual, kepribadian dan kreatif, sehingga menjadi pribadi yang dewasa, 
                        mandiri, secara manusiawi dan kristiani. 
                    </p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="text-center mb-6">
                        <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-bullseye text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">MISI</h3>
                    </div>
                    <ul class="text-gray-700 space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-play text-primary mr-3 mt-1"></i>
                            Mendidik, membimbing dan mendampingi serta melatih para remaja putra agar 
                            berkembang secara seimbang dalam íman, intelektual dan kepribadian menuju 
                            pada kedewasaan pribadi secara menusiawi dan kristiani. 
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-play text-primary mr-3 mt-1"></i>
                            Mendampingi dan melatih para remaja putra agar berkembang dalam hal íman 
                            Katolik, mengembangkan talenta yang kreatif, inovatif dan sosialisasi dalam
                            komunitas serta keterlibatan dalam hidup menggereja dan masyarakat.
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-play text-primary mr-3 mt-1"></i>
                            Menanamkan nilai-nilai Dehonian. 
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-play text-primary mr-3 mt-1"></i>
                            Membantu para remaja putra semakin mampu untuk menghadapi tantangan zaman 
                            yang berkembang saat ini, sehingga para remaja putra dapat menemukan panggilan 
                            hidupnya. 
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-play text-primary mr-3 mt-1"></i>
                            Menjadikan Asrama Putra sebagai tempat yang mendukung para remaja putra bertumbuh dalam 
                            panggilan khusus (romo dan Bruder).
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="sejarah" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10">
                <h2 class="text-3xl text-center md:text-4xl font-bold text-gray-900 mb-10">Sejarah Asrama</h2>
                <p class="text-lg text-gray-700 text-justify  max-w-3xl mx-auto leading-relaxed">
                    Umat Katolik di Lampung, yang berada di bawah Keuskupan Tanjungkarang, turut berkontribusi dalam 
                    dunia pendidikan melalui pendirian sekolah-sekolah Katolik yang terbuka untuk semua kalangan. 
                    Salah satu sekolah yang menghadapi tantangan berat adalah SMP dan SMA Yos Sudarso Metro, yang 
                    dulunya melahirkan banyak tokoh masyarakat namun mengalami penurunan jumlah siswa dalam dua dekade 
                    terakhir. Setelah diserahkan oleh Yayasan kepada Keuskupan dan kemudian ditawarkan kepada Kongregasi 
                    SCJ, sekolah ini akhirnya resmi dikelola oleh SCJ sejak 1 Juni 2010. Untuk mendukung peningkatan 
                    jumlah siswa, SCJ mendirikan Asrama Putra Leo Dehon pada tahun ajaran 2010–2011, melengkapi dua 
                    asrama putri yang sudah ada. Asrama ini diperuntukkan bagi siswa luar kota yang membutuhkan tempat 
                    tinggal dekat sekolah, memberikan lingkungan aman dan biaya terjangkau, serta terbukti memberi 
                    dampak positif terhadap peningkatan jumlah siswa di Yos Sudarso.
                </p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.getElementById('carouselImages');
            const totalSlides = carousel.children.length;
            let currentIndex = 0;

            const updateSlide = () => {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            };

            setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateSlide();
            }, 3000);
        });
    </script>
@endsection
