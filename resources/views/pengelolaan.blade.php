@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="w-full mt-20 mb-12 mx-auto bg-white p-6 rounded-xl shadow-md">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Katalog Layanan</h2>
        <p class="mt-2 text-sm text-gray-500">Daftar penerimaan jasa yang tersedia di LaundryCare.</p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
        <thead class="bg-indigo-100 text-indigo-800">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-semibold border-b w-16">ID</th>
                <th class="px-4 py-2 text-left text-sm font-semibold border-b">Nama</th>
                <th class="px-4 py-2 text-left text-sm font-semibold border-b">Harga</th>
                <th class="px-4 py-2 text-left text-sm font-semibold border-b">Volume</th>
                <th class="px-4 py-2 text-right text-sm font-semibold border-b w-32">Aksi</th>
            </tr>
        </thead>

            <tbody>
                @foreach($data as $item)
                <tr class="hover:bg-indigo-50 transition">
                    <td class="px-4 py-2 border-b text-left">{{ $item['id'] }}</td>
                    <td class="px-4 py-2 border-b">{{ $item['nama'] }}</td>
                    <td class="px-4 py-2 border-b text-green-600 font-medium">Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border-b">{{ $item['Volume'] }}</td>
                    <td class="px-4 py-2 border-b text-right space-x-2 whitespace-nowrap">
                        <button class="inline-flex items-center px-2 py-1 bg-yellow-400 text-white rounded text-sm hover:bg-yellow-500">Edit</button>
                        <button class="inline-flex items-center px-2 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahan bagian bawah tabel -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Tambah layanan -->
        <div class="bg-indigo-50 p-4 rounded-xl shadow-inner">
            <h3 class="text-lg font-semibold text-indigo-700 mb-2">Tambah Layanan Baru</h3>
            <button class="block w-full text-center bg-indigo-500 text-white py-2 rounded hover:bg-indigo-600 transition">
                Tambahkan Layanan
            </button>
        </div>

        <!-- Statistik ringkas -->
        <div class="bg-green-50 p-4 rounded-xl shadow-inner">
            <h3 class="text-lg font-semibold text-green-700 mb-2">Statistik Layanan</h3>
            <ul class="text-sm text-gray-700 space-y-1">
                <li>Jumlah layanan aktif: <strong>{{ count($data) }}</strong></li>
                <li>Harga tertinggi: <strong>Rp{{ number_format(collect($data)->max('harga'), 0, ',', '.') }}</strong></li>
                <li>Rata-rata harga: <strong>Rp{{ number_format(collect($data)->avg('harga'), 0, ',', '.') }}</strong></li>
            </ul>
        </div>

        <!-- Rekomendasi -->
        <div class="bg-yellow-50 p-4 rounded-xl shadow-inner">
            <h3 class="text-lg font-semibold text-yellow-700 mb-2">Tips Pengelolaan</h3>
            <ul class="text-sm text-gray-700 space-y-1 list-disc list-inside">
                <li>Periksa kualitas layanan secara rutin.</li>
                <li>Berikan promo untuk pelanggan setia.</li>
                <li>Catat feedback pelanggan dan evaluasi berkala.</li>
            </ul>
        </div>
    </div>
</div>
@endsection
