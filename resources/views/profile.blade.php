@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="w-full mx-auto bg-pink-50 rounded-xl shadow-lg p-6">
    <div class="flex items-center space-x-4 mb-6">
        <div class="flex-shrink-0">
            <!-- Icon user with soft pink tone -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5.121 17.804A13.937 13.937 0 0112 15c2.165 0 4.198.514 6.01 1.42M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </div>
        <div>
            <h1 class="text-3xl font-bold text-pink-600">Profil Anda</h1>
            <p class="text-sm text-pink-500">Selamat datang di LaundryCare!</p>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-inner space-y-3">
        <p class="text-gray-700">
            <span class="font-semibold text-pink-600">Username: {{ $username }}</span>
        </p>
        <p class="text-gray-600 text-sm italic">Terima kasih telah mempercayakan cucian Anda kepada kami</p>
    </div>
</div>
@endsection
