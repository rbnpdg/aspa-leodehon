@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Simple Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
                </div>
                
                <!-- Logout Button -->
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, {{ Auth::user()->name }}</span>
                    <form method="GET" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-6 px-4">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome to your Dashboard</h2>
            <p class="text-gray-600">You are successfully logged in!</p>
            
            <!-- User Info -->
            <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Your Information:</h3>
                <ul class="space-y-2 text-gray-600">
                    <li><strong>Name:</strong> {{ Auth::user()->name }}</li>
                    <li><strong>Username:</strong> {{ Auth::user()->username }}</li>
                    <li><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    <li><strong>Member Since:</strong> {{ Auth::user()->created_at->format('F j, Y') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- SweetAlert2 success notification --}}
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: @json(session('success')), // aman dari XSS
                timer: 3000,
                showConfirmButton: false
            });
        });
    </script>
@endif
@endsection
