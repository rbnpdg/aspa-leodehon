<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo-yayasan-cropped.png') }}">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0539FF',
                        'primary-dark': '#0429CC',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-gradient-to-br from-primary via-blue-500 to-purple-600 flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden">
        <div class="flex flex-col lg:flex-row min-h-[600px]">
            <div class="hidden lg:block lg:w-1/2 relative overflow-hidden">
                <!-- Background Image with Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-[#0539FF] opacity-50 z-10"></div>
                <img src="{{ asset('img/gambar1.jpg') }}" alt="Illustration"
                    class="absolute inset-0 w-full h-full object-cover">
                
                <!-- Decorative Elements (in front of the image) -->
                <!-- Large Circle -->
                <div class="absolute top-10 right-10 w-32 h-32 bg-white bg-opacity-10 rounded-full backdrop-blur-sm z-20"></div>
                
                <!-- Small Circle -->
                <div class="absolute bottom-20 left-12 w-16 h-16 bg-white bg-opacity-20 rounded-full backdrop-blur-sm z-20"></div>
                
                <!-- Medium Circle with Border -->
                <div class="absolute top-1/3 left-1/4 w-24 h-24 border-2 border-white border-opacity-20 rounded-full z-20"></div>
                
                <!-- Square -->
                <div class="absolute bottom-1/4 right-1/4 w-20 h-20 bg-white bg-opacity-5 rounded-lg transform rotate-45 backdrop-blur-sm z-20"></div>
                
                <!-- Floating Rectangle -->
                <div class="absolute top-1/2 left-10 w-40 h-12 border border-white border-opacity-30 rounded-lg transform -rotate-12 z-20"></div>
                
                <!-- Dots Pattern -->
                <div class="absolute top-20 left-20 z-20 flex space-x-2">
                    <div class="w-2 h-2 bg-white bg-opacity-50 rounded-full"></div>
                    <div class="w-2 h-2 bg-white bg-opacity-50 rounded-full"></div>
                    <div class="w-2 h-2 bg-white bg-opacity-50 rounded-full"></div>
                </div>
                
                <!-- Vertical Line -->
                <div class="absolute bottom-10 right-20 w-0.5 h-20 bg-white bg-opacity-30 z-20"></div>
                
                <!-- Content Overlay -->
                <div class="absolute inset-0 flex items-center justify-center z-30">
                    <div class="text-center text-white p-6">
                    <p class="mt-2 text-m text-white text-opacity-90">Selamat datang di website</p>    
                    <h1 class="text-3xl font-bold">Asrama Putra Leo Dehon</h1>
                    </div>
                </div>
                
                <!-- Abstract Wave -->
                <svg class="absolute bottom-0 left-0 w-full z-20" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 120L48 105C96 90 192 60 288 55C384 50 480 70 576 75C672 80 768 70 864 65C960 60 1056 60 1152 65C1248 70 1344 80 1392 85L1440 90V120H1392C1344 120 1248 120 1152 120C1056 120 960 120 864 120C768 120 672 120 576 120C480 120 384 120 288 120C192 120 96 120 48 120H0Z" fill="white" fill-opacity="0.1"/>
                </svg>
            </div>

            <div class="flex-1 p-4 lg:p-8 flex items-center justify-center">
                <div class="w-full max-w-sm space-y-6">
                    <!-- Header -->
                    <div class="text-center space-y-2">
                        <h1 class="text-4xl font-bold text-gray-900">Selamat datang!</h1>
                        <p class="text-gray-600">Silahkan lengkapi form berikut!</p>
                    </div>

                    <!-- Register Form -->
                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <!-- Nama Field -->
                        <div class="space-y-2">
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                placeholder="Nama Lengkap"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-500"
                                required
                            >
                        </div>

                        <!-- Username Field -->
                        <div class="space-y-2">
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                placeholder="Username"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-500"
                                required
                            >
                        </div>

                        <!-- Email/Username Field -->
                        <div class="space-y-2">
                            <input 
                                type="text" 
                                id="email" 
                                name="email" 
                                placeholder="Email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-500"
                                required
                            >
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="space-y-2">
                            <div class="relative">
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    placeholder="Password"
                                    class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-200 placeholder-gray-500 pr-12"
                                    required
                                >
                                <button 
                                    type="button" 
                                    onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"
                                >
                                    <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="text-right">
                            <a href="#" class="text-sm text-gray-500 hover:text-primary transition-colors">
                                Recovery Password
                            </a>
                        </div>

                        <!-- Resgiter Button -->
                        <button 
                            type="submit" 
                            class="w-full bg-primary hover:bg-primary-dark text-white font-semibold py-4 px-6 rounded-xl transition-all duration-200 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                        >
                            Register
                        </button>

                        <!-- Sign In Link -->
                        <div class="text-center">
                            <p class="text-gray-600">
                                Sudah memiliki akun?
                                <a href="{{ route('show-login') }}" class="text-primary hover:text-primary-dark font-semibold transition-colors">
                                    Masuk Sekarang
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('scale-[1.02]');
                });
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('scale-[1.02]');
                });
            });
        });
    </script>
</body>
</html>