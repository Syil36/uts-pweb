@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="w-full px-4 py-6 bg-gradient-to-r from-pink-100 via-pink-200 to-fuchsia-100 rounded-2xl shadow mb-6">
    <h1 class="text-3xl font-bold text-pink-700 mb-2">Selamat datang, {{ $username }}!</h1>
    <p class="text-pink-600 text-sm">Dashboard LaundryCare – pantau cucianmu dan layanan lainnya dengan mudah 💧</p>

    <!-- Stat Card -->
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

    <!-- Jadwal Pickup & Riwayat Transaksi -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
        <!-- Jadwal Pickup -->
        <!-- Jadwal Pickup -->
        <!-- Jadwal Pickup -->
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition overflow-x-auto">
            <h3 class="text-lg font-bold text-pink-600 mb-3">Jadwal Pickup 🚚</h3>
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-700 uppercase bg-pink-100">
                    <tr>
                        <th scope="col" class="px-4 py-2">Hari</th>
                        <th scope="col" class="px-4 py-2">Waktu</th>
                        <th scope="col" class="px-4 py-2">Customer</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2">Senin</td>
                        <td class="px-4 py-2">14.00 WIB</td>
                        <td class="px-4 py-2">Budi</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Rabu</td>
                        <td class="px-4 py-2">15.30 WIB</td>
                        <td class="px-4 py-2">Rina</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Jumat</td>
                        <td class="px-4 py-2">13.00 WIB</td>
                        <td class="px-4 py-2">Andi</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Riwayat Transaksi -->
        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition overflow-x-auto">
            <h3 class="text-lg font-bold text-pink-600 mb-3">Riwayat Transaksi 📊</h3>
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-700 uppercase bg-pink-100">
                    <tr>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Customer</th>
                        <th class="px-4 py-2">Berat</th>
                        <th class="px-4 py-2">Biaya</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2">01 Mei</td>
                        <td class="px-4 py-2">Budi</td>
                        <td class="px-4 py-2">5 kg</td>
                        <td class="px-4 py-2">Rp25.000</td>
                        <td class="px-4 py-2 text-green-500 font-semibold">Selesai</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">03 Mei</td>
                        <td class="px-4 py-2">Rina</td>
                        <td class="px-4 py-2">3 kg</td>
                        <td class="px-4 py-2">Rp15.000</td>
                        <td class="px-4 py-2 text-yellow-500 font-semibold">Diproses</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">05 Mei</td>
                        <td class="px-4 py-2">Andi</td>
                        <td class="px-4 py-2">4 kg</td>
                        <td class="px-4 py-2">Rp20.000</td>
                        <td class="px-4 py-2 text-blue-500 font-semibold">Pickup</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection
