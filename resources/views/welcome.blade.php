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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fasilitas</h2>
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kegiatan Harian Asrama</h2>
                <p class="text-lg text-gray-600">
                    Rincian kegiatan dalam sehari yang terstruktur untuk mendukung kedisiplinan dan pertumbuhan pribadi para penghuni asrama.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-gray-800">
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="py-3 pr-6 w-24 font-semibold">04:30</td>
                            <td>Bangun pagi</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">05:30</td>
                            <td>Doa pagi atau misa Kudus</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">06:00</td>
                            <td>Makan pagi dan piket</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">06:45</td>
                            <td>Berangkat ke sekolah</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">15:30</td>
                            <td>Pulang sekolah dan istirahat (cuci, setrika, dll)</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">16:30</td>
                            <td>Berkarya dan piket untuk makan malam</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">18:00</td>
                            <td>Misa atau ibadat sore</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">18:30</td>
                            <td>Makan malam dan piket</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">19:30</td>
                            <td>Literasi</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">21:00</td>
                            <td>Doa malam</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">21:30</td>
                            <td>Tidur / melanjutkan belajar dalam keheningan</td>
                        </tr>
                        <tr>
                            <td class="py-3 pr-6 font-semibold">23:00</td>
                            <td>Lampu mati / tidak ada lagi kegiatan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
          .path-0{
            animation:pathAnim-0 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-0{
            0%{
              d: path("M 0,400 L 0,100 C 98.71770334928229,104.77511961722487 197.43540669856458,109.55023923444976 292,101 C 386.5645933014354,92.44976076555024 476.97607655502406,70.57416267942583 573,82 C 669.0239234449759,93.42583732057417 770.6602870813396,138.1531100478469 874,137 C 977.3397129186604,135.8468899521531 1082.3827751196172,88.8133971291866 1177,75 C 1271.6172248803828,61.186602870813395 1355.8086124401914,80.5933014354067 1440,100 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,100 C 109.70334928229664,124.622009569378 219.40669856459328,149.244019138756 316,143 C 412.5933014354067,136.755980861244 496.07655502392333,99.64593301435407 588,101 C 679.9234449760767,102.35406698564593 780.2870813397129,142.17224880382776 882,137 C 983.7129186602871,131.82775119617224 1086.775119617225,81.66507177033492 1180,68 C 1273.224880382775,54.334928229665074 1356.6124401913876,77.16746411483254 1440,100 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,100 C 117.78947368421055,75.38755980861245 235.5789473684211,50.77511961722489 335,58 C 434.4210526315789,65.22488038277511 515.4736842105264,104.2870813397129 600,117 C 684.5263157894736,129.7129186602871 772.5263157894736,116.07655502392346 852,109 C 931.4736842105264,101.92344497607654 1002.421052631579,101.40669856459328 1099,101 C 1195.578947368421,100.59330143540672 1317.7894736842104,100.29665071770336 1440,100 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,100 C 83.83732057416267,105.03349282296651 167.67464114832535,110.066985645933 274,104 C 380.32535885167465,97.933014354067 509.13875598086133,80.76555023923444 600,65 C 690.8612440191387,49.23444976076555 743.7703349282298,34.87081339712918 837,55 C 930.2296650717702,75.12918660287082 1063.77990430622,129.7511961722488 1171,143 C 1278.22009569378,156.2488038277512 1359.11004784689,128.1244019138756 1440,100 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,100 C 98.71770334928229,104.77511961722487 197.43540669856458,109.55023923444976 292,101 C 386.5645933014354,92.44976076555024 476.97607655502406,70.57416267942583 573,82 C 669.0239234449759,93.42583732057417 770.6602870813396,138.1531100478469 874,137 C 977.3397129186604,135.8468899521531 1082.3827751196172,88.8133971291866 1177,75 C 1271.6172248803828,61.186602870813395 1355.8086124401914,80.5933014354067 1440,100 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,100 C 98.71770334928229,104.77511961722487 197.43540669856458,109.55023923444976 292,101 C 386.5645933014354,92.44976076555024 476.97607655502406,70.57416267942583 573,82 C 669.0239234449759,93.42583732057417 770.6602870813396,138.1531100478469 874,137 C 977.3397129186604,135.8468899521531 1082.3827751196172,88.8133971291866 1177,75 C 1271.6172248803828,61.186602870813395 1355.8086124401914,80.5933014354067 1440,100 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#f3f4f6" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><style>
          .path-1{
            animation:pathAnim-1 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-1{
            0%{
              d: path("M 0,400 L 0,233 C 85.44497607655498,244.444976076555 170.88995215310996,255.88995215311004 277,255 C 383.11004784689004,254.11004784688996 509.88516746411494,240.8851674641148 624,224 C 738.1148325358851,207.1148325358852 839.5693779904306,186.56937799043064 912,184 C 984.4306220095694,181.43062200956936 1027.8373205741627,196.83732057416267 1111,208 C 1194.1626794258373,219.16267942583733 1317.0813397129186,226.08133971291866 1440,233 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,233 C 107.96172248803828,219.755980861244 215.92344497607655,206.51196172248802 301,197 C 386.07655502392345,187.48803827751198 448.26794258373207,181.70813397129186 548,190 C 647.7320574162679,198.29186602870814 785.0047846889952,220.65550239234452 886,232 C 986.9952153110048,243.34449760765548 1051.7129186602872,243.66985645933016 1138,242 C 1224.2870813397128,240.33014354066984 1332.1435406698565,236.66507177033492 1440,233 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,233 C 113.74162679425837,225.9090909090909 227.48325358851673,218.8181818181818 322,208 C 416.51674641148327,197.1818181818182 491.8086124401914,182.6363636363636 590,200 C 688.1913875598086,217.3636363636364 809.2822966507176,266.6363636363637 906,271 C 1002.7177033492824,275.3636363636363 1075.0622009569379,234.8181818181818 1160,221 C 1244.9377990430621,207.1818181818182 1342.468899521531,220.0909090909091 1440,233 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,233 C 93.08133971291866,206.4736842105263 186.16267942583733,179.94736842105263 290,193 C 393.8373205741627,206.05263157894737 508.43062200956933,258.6842105263158 607,270 C 705.5693779904307,281.3157894736842 788.1148325358852,251.31578947368422 868,234 C 947.8851674641148,216.68421052631578 1025.11004784689,212.05263157894737 1120,214 C 1214.88995215311,215.94736842105263 1327.4449760765551,224.4736842105263 1440,233 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,233 C 85.44497607655498,244.444976076555 170.88995215310996,255.88995215311004 277,255 C 383.11004784689004,254.11004784688996 509.88516746411494,240.8851674641148 624,224 C 738.1148325358851,207.1148325358852 839.5693779904306,186.56937799043064 912,184 C 984.4306220095694,181.43062200956936 1027.8373205741627,196.83732057416267 1111,208 C 1194.1626794258373,219.16267942583733 1317.0813397129186,226.08133971291866 1440,233 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,233 C 85.44497607655498,244.444976076555 170.88995215310996,255.88995215311004 277,255 C 383.11004784689004,254.11004784688996 509.88516746411494,240.8851674641148 624,224 C 738.1148325358851,207.1148325358852 839.5693779904306,186.56937799043064 912,184 C 984.4306220095694,181.43062200956936 1027.8373205741627,196.83732057416267 1111,208 C 1194.1626794258373,219.16267942583733 1317.0813397129186,226.08133971291866 1440,233 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#f3f4f6" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
    <section id="visi-misi" class="py-20 bg-gray-100">
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
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
          .path-0{
            animation:pathAnim-0 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-0{
            0%{
              d: path("M 0,400 L 0,100 C 63.944604760143065,120.53708225428537 127.88920952028613,141.07416450857073 175,134 C 222.11079047971387,126.92583549142928 252.38776667899862,92.24042422000247 294,82 C 335.6122333210014,71.75957577999753 388.5597237637194,85.96413861141943 452,105 C 515.4402762362806,124.03586138858057 589.373338266124,147.90302133431987 653,132 C 716.626661733876,116.09697866568011 769.9469231717843,60.423776051301026 824,61 C 878.0530768282157,61.576223948698974 932.8389690467384,118.40187446047601 976,117 C 1019.1610309532616,115.59812553952399 1050.6972006412627,55.968726106794925 1105,51 C 1159.3027993587373,46.031273893205075 1236.3722283882105,95.7232211123443 1296,113 C 1355.6277716117895,130.2767788876557 1397.8138858058946,115.13838944382785 1440,100 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,100 C 41.602269083734114,95.94608459736097 83.20453816746823,91.89216919472192 133,101 C 182.79546183253177,110.10783080527808 240.78411641386117,132.37740781847327 304,124 C 367.21588358613883,115.62259218152671 435.65899617708715,76.59819953138489 487,70 C 538.3410038229129,63.4018004686151 572.57989887779,89.22979405598716 616,110 C 659.42010112221,130.77020594401284 712.0214083117526,146.48262424466643 775,149 C 837.9785916882474,151.51737575533357 911.3344678752003,140.83970896534714 974,114 C 1036.6655321247997,87.16029103465284 1088.640720187446,44.15853989394499 1133,55 C 1177.359279812554,65.84146010605501 1214.1026513750155,130.52613145887287 1264,147 C 1313.8973486249845,163.47386854112713 1376.9486743124921,131.73693427056355 1440,100 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,100 C 38.086570477247506,113.01955851522999 76.17314095449501,126.03911703045999 132,121 C 187.826859045505,115.96088296954001 261.39400665926746,92.86309039339007 321,91 C 380.60599334073254,89.13690960660993 426.25083240843514,108.50852139597977 484,100 C 541.7491675915649,91.49147860402023 611.6026637069922,55.10282402269084 668,51 C 724.3973362930078,46.89717597730916 767.3385127635961,75.08018251325687 815,80 C 862.6614872364039,84.91981748674313 915.0432852386238,66.57644592428167 965,61 C 1014.9567147613762,55.423554075718336 1062.488346281909,62.61403378961647 1108,81 C 1153.511653718091,99.38596621038353 1197.0033296337403,128.96741891725242 1252,134 C 1306.9966703662597,139.03258108274758 1373.4983351831297,119.51629054137379 1440,100 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,100 C 37.370427919595514,124.20915032679738 74.74085583919103,148.41830065359477 137,136 C 199.25914416080897,123.58169934640523 286.40700456283145,74.5359477124183 338,56 C 389.59299543716855,37.4640522875817 405.63112590948333,49.437908496732035 453,55 C 500.36887409051667,60.562091503267965 579.0684917992353,59.71241830065358 638,79 C 696.9315082007647,98.28758169934642 736.0949068935752,137.7124183006536 788,138 C 839.9050931064248,138.2875816993464 904.5518806264643,99.43790849673202 964,98 C 1023.4481193735357,96.56209150326798 1077.6975706005676,132.5359477124183 1134,142 C 1190.3024293994324,151.4640522875817 1248.6578369712665,134.41830065359477 1300,123 C 1351.3421630287335,111.58169934640523 1395.6710815143667,105.79084967320262 1440,100 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,100 C 63.944604760143065,120.53708225428537 127.88920952028613,141.07416450857073 175,134 C 222.11079047971387,126.92583549142928 252.38776667899862,92.24042422000247 294,82 C 335.6122333210014,71.75957577999753 388.5597237637194,85.96413861141943 452,105 C 515.4402762362806,124.03586138858057 589.373338266124,147.90302133431987 653,132 C 716.626661733876,116.09697866568011 769.9469231717843,60.423776051301026 824,61 C 878.0530768282157,61.576223948698974 932.8389690467384,118.40187446047601 976,117 C 1019.1610309532616,115.59812553952399 1050.6972006412627,55.968726106794925 1105,51 C 1159.3027993587373,46.031273893205075 1236.3722283882105,95.7232211123443 1296,113 C 1355.6277716117895,130.2767788876557 1397.8138858058946,115.13838944382785 1440,100 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,100 C 63.944604760143065,120.53708225428537 127.88920952028613,141.07416450857073 175,134 C 222.11079047971387,126.92583549142928 252.38776667899862,92.24042422000247 294,82 C 335.6122333210014,71.75957577999753 388.5597237637194,85.96413861141943 452,105 C 515.4402762362806,124.03586138858057 589.373338266124,147.90302133431987 653,132 C 716.626661733876,116.09697866568011 769.9469231717843,60.423776051301026 824,61 C 878.0530768282157,61.576223948698974 932.8389690467384,118.40187446047601 976,117 C 1019.1610309532616,115.59812553952399 1050.6972006412627,55.968726106794925 1105,51 C 1159.3027993587373,46.031273893205075 1236.3722283882105,95.7232211123443 1296,113 C 1355.6277716117895,130.2767788876557 1397.8138858058946,115.13838944382785 1440,100 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#f3f4f6" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path><style>
          .path-1{
            animation:pathAnim-1 4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
          }
          @keyframes pathAnim-1{
            0%{
              d: path("M 0,400 L 0,233 C 40.61354051054384,213.91838697743248 81.22708102108768,194.83677395486498 138,193 C 194.77291897891232,191.16322604513502 267.70521642619315,206.57129115797264 321,224 C 374.29478357380685,241.42870884202736 407.95205327413987,260.87806141324455 463,249 C 518.0479467258601,237.12193858675545 594.4865704772475,193.9164631890492 660,197 C 725.5134295227525,200.0835368109508 780.1016648168701,249.45608583055864 828,252 C 875.8983351831299,254.54391416944136 917.106770255272,210.25919348871622 957,193 C 996.893229744728,175.74080651128378 1035.4712541620422,185.50714021457642 1092,203 C 1148.5287458379578,220.49285978542358 1223.0082130965593,245.71224565297814 1284,252 C 1344.9917869034407,258.28775434702186 1392.4958934517203,245.64387717351093 1440,233 L 1440,400 L 0,400 Z");
            }
            25%{
              d: path("M 0,400 L 0,233 C 45.14189172524354,205.52065606116662 90.28378345048708,178.0413121223332 136,194 C 181.71621654951292,209.9586878776668 228.0067579232952,269.3554075718338 296,274 C 363.9932420767048,278.6445924281662 453.6891848563324,228.53705759033176 505,228 C 556.3108151436676,227.46294240966824 569.236502651375,276.4963620668393 613,279 C 656.763497348625,281.5036379331607 731.3648045381675,237.47749414231103 785,219 C 838.6351954618325,200.52250585768897 871.304279195955,207.59366136391662 931,229 C 990.695720804045,250.40633863608338 1077.418078678012,286.14786040202245 1137,281 C 1196.581921321988,275.85213959797755 1229.0234060919965,229.81489702799357 1275,215 C 1320.9765939080035,200.18510297200643 1380.4882969540017,216.59255148600323 1440,233 L 1440,400 L 0,400 Z");
            }
            50%{
              d: path("M 0,400 L 0,233 C 55.553779750894066,226.7788136638303 111.10755950178813,220.5576273276606 161,233 C 210.89244049821187,245.4423726723394 255.1235417437415,276.54830435318786 309,267 C 362.8764582562585,257.45169564681214 426.39827352324573,207.2491552595881 484,204 C 541.6017264767543,200.7508447404119 593.2833641632753,244.45507460845974 647,242 C 700.7166358367247,239.54492539154026 756.4682698236527,190.93054630657292 807,193 C 857.5317301763473,195.06945369342708 902.8435565421138,247.82274016524855 951,262 C 999.1564434578862,276.17725983475145 1050.1575040078926,251.7784930324331 1108,248 C 1165.8424959921074,244.2215069675669 1230.5264274263166,261.0632877050191 1287,262 C 1343.4735725736834,262.9367122949809 1391.7367862868418,247.96835614749045 1440,233 L 1440,400 L 0,400 Z");
            }
            75%{
              d: path("M 0,400 L 0,233 C 46.847453446787526,227.4611172770995 93.69490689357505,221.92223455419904 152,224 C 210.30509310642495,226.07776544580096 280.06782587248733,235.77217906030336 331,244 C 381.93217412751267,252.22782093969664 414.0337896164756,258.98904920458756 462,246 C 509.9662103835244,233.01095079541247 573.7970156616105,200.27162412134666 628,196 C 682.2029843383895,191.72837587865334 726.7781477370822,215.92445431002594 778,217 C 829.2218522629178,218.07554568997406 887.0903933900604,196.03055863854973 944,198 C 1000.9096066099396,199.96944136145027 1056.8602787026762,225.9533111357751 1107,232 C 1157.1397212973238,238.0466888642249 1201.4684917992354,224.15619681834997 1256,221 C 1310.5315082007646,217.84380318165003 1375.2657541003823,225.42190159082503 1440,233 L 1440,400 L 0,400 Z");
            }
            100%{
              d: path("M 0,400 L 0,233 C 40.61354051054384,213.91838697743248 81.22708102108768,194.83677395486498 138,193 C 194.77291897891232,191.16322604513502 267.70521642619315,206.57129115797264 321,224 C 374.29478357380685,241.42870884202736 407.95205327413987,260.87806141324455 463,249 C 518.0479467258601,237.12193858675545 594.4865704772475,193.9164631890492 660,197 C 725.5134295227525,200.0835368109508 780.1016648168701,249.45608583055864 828,252 C 875.8983351831299,254.54391416944136 917.106770255272,210.25919348871622 957,193 C 996.893229744728,175.74080651128378 1035.4712541620422,185.50714021457642 1092,203 C 1148.5287458379578,220.49285978542358 1223.0082130965593,245.71224565297814 1284,252 C 1344.9917869034407,258.28775434702186 1392.4958934517203,245.64387717351093 1440,233 L 1440,400 L 0,400 Z");
            }
          }</style><path d="M 0,400 L 0,233 C 40.61354051054384,213.91838697743248 81.22708102108768,194.83677395486498 138,193 C 194.77291897891232,191.16322604513502 267.70521642619315,206.57129115797264 321,224 C 374.29478357380685,241.42870884202736 407.95205327413987,260.87806141324455 463,249 C 518.0479467258601,237.12193858675545 594.4865704772475,193.9164631890492 660,197 C 725.5134295227525,200.0835368109508 780.1016648168701,249.45608583055864 828,252 C 875.8983351831299,254.54391416944136 917.106770255272,210.25919348871622 957,193 C 996.893229744728,175.74080651128378 1035.4712541620422,185.50714021457642 1092,203 C 1148.5287458379578,220.49285978542358 1223.0082130965593,245.71224565297814 1284,252 C 1344.9917869034407,258.28775434702186 1392.4958934517203,245.64387717351093 1440,233 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#f3f4f6" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 200)"></path></svg>
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
