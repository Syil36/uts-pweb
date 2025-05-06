@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="w-full px-4 py-6 bg-gradient-to-r from-pink-100 via-pink-200 to-fuchsia-100 rounded-2xl shadow mb-6">
    <h1 class="text-3xl font-bold text-pink-700 mb-2">Selamat datang, {{ $username }}!</h1>
    <p class="text-pink-600 text-sm">Dashboard LaundryCare – pantau cucianmu dan layanan lainnya dengan mudah 💧</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6 text-center">
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-pink-600">Total Cucian Masuk</h2>
            <p class="text-3xl font-bold text-pink-800 mt-2">120</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-pink-600">Sedang Diproses</h2>
            <p class="text-3xl font-bold text-pink-800 mt-2">35</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-lg font-semibold text-pink-600">Selesai Hari Ini</h2>
            <p class="text-3xl font-bold text-pink-800 mt-2">42</p>
        </div>
    </div>
</div>

<!-- Cards bawah -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-bold text-pink-600 mb-2">Promo & Diskon</h3>
        <p class="text-gray-600 text-sm">Cuci 5 kg gratis 1 kg! Berlaku hingga akhir bulan 🌟</p>
    </div>
    <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-bold text-pink-600 mb-2">Jadwal Pickup</h3>
        <p class="text-gray-600 text-sm">Driver akan menjemput cucianmu pukul 14.00 WIB 🚚</p>
    </div>
    <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
        <h3 class="text-lg font-bold text-pink-600 mb-2">Riwayat Transaksi</h3>
        <p class="text-gray-600 text-sm">Lihat dan kelola transaksi kamu bulan ini 📊</p>
    </div>
</div>
@endsection
