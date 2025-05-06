@extends('layouts.app')

@section('title', 'Profile Admin')

@section('content')
<div class="w-full mt-20 mx-auto bg-pink-50 rounded-xl shadow-lg p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
        <div class="flex items-center space-x-4">
            <div class="flex-shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 15c2.165 0 4.198.514 6.01 1.42M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-pink-600">Profil Admin</h1>
                <p class="text-sm text-pink-500">Kelola akun dan pantau kinerja LaundryCare Anda.</p>
            </div>
        </div>
        <button class="mt-4 md:mt-0 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600 transition">Edit Profil</button>
    </div>

    <!-- Informasi Akun -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white p-5 rounded-lg shadow-inner">
        <div>
            <h2 class="text-lg font-semibold text-pink-700 mb-2">Informasi Akun</h2>
            <ul class="text-gray-700 space-y-2">
                <li><strong>Username:</strong> {{ $username }}</li>
                <li><strong>Email:</strong> admin@laundrycare.com</li>
                <li><strong>No HP:</strong> +62 812-3456-7890</li>
                <li><strong>Role:</strong> Admin</li>
                <li><strong>Tanggal Bergabung:</strong> 01 Januari 2024</li>
            </ul>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-pink-700 mb-2">Statistik Singkat</h2>
            <ul class="text-gray-700 space-y-2">
                <li><strong>Total Transaksi:</strong> 385</li>
                <li><strong>Customer Aktif:</strong> 150+</li>
                <li><strong>Rating Layanan:</strong> ⭐ 4.8 / 5.0</li>
                <li><strong>Jumlah Karyawan:</strong> 12</li>
            </ul>
        </div>
    </div>

    <!-- Aktivitas Terkini -->
    <div class="bg-white p-5 mt-6 rounded-lg shadow-inner">
        <h2 class="text-lg font-semibold text-pink-700 mb-3">Aktivitas Terbaru</h2>
        <ul class="space-y-2 text-sm text-gray-600">
            <li>✅ Transaksi #LDY-20250501 diselesaikan - <span class="text-gray-400">6 Mei 2025, 09:00</span></li>
            <li>📦 Pickup dijadwalkan untuk customer "Andi" - <span class="text-gray-400">5 Mei 2025, 15:00</span></li>
            <li>🔧 Admin memperbarui data harga layanan - <span class="text-gray-400">4 Mei 2025, 18:22</span></li>
        </ul>
    </div>

    <!-- Pengaturan -->
    <div class="bg-white p-5 mt-6 rounded-lg shadow-inner">
        <h2 class="text-lg font-semibold text-pink-700 mb-3">Pengaturan Akun</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <button class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 py-2 px-4 rounded-lg transition text-left">
                🔒 Ubah Password
            </button>
            <button class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 py-2 px-4 rounded-lg transition text-left">
                📬 Kelola Notifikasi
            </button>
            <button class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 py-2 px-4 rounded-lg transition text-left">
                👥 Manajemen Karyawan
            </button>
            <button class="w-full bg-pink-100 hover:bg-pink-200 text-pink-700 py-2 px-4 rounded-lg transition text-left">
                ⚙️ Preferensi Aplikasi
            </button>
        </div>
    </div>
</div>
@endsection
