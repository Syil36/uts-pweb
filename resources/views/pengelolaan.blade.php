@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="w-full mx-auto bg-white p-6 rounded-xl shadow-md">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Katalog</h2>

        <p class="text-sm text-gray-500">Daftar penerimaan jasa yang tersedia di LaundryCare.</p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
            <thead class="bg-indigo-100 text-indigo-800">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Harga</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold border-b">Volume</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr class="hover:bg-indigo-50 transition">
                    <td class="px-4 py-2 border-b">{{ $item['id'] }}</td>
                    <td class="px-4 py-2 border-b">{{ $item['nama'] }}</td>
                    <td class="px-4 py-2 border-b text-green-600 font-medium">Rp{{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border-b">{{ $item['Volume'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
