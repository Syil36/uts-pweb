<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $username = $request->input('username');
        // Redirect menggunakan query string, bukan route parameter
        return redirect('/dashboard?username=' . urlencode($username));
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan() {
        $data = [
            ['id' => 1, 'nama' => 'Cuci Pakaian', 'harga' => 5000, 'Volume' => 'kg'],
            ['id' => 2, 'nama' => 'Cuci Express', 'harga' => 10000, 'Volume' => 'kg'],
            ['id' => 3, 'nama' => 'Cuci Sepatu', 'harga' => 35000, 'Volume' => 'pasang'],
            ['id' => 4, 'nama' => 'Cuci Karpet', 'harga' => 15000, 'Volume' => 'meter'],
            ['id' => 5, 'nama' => 'Cuci Bed Cover/Sprei', 'harga' => 20000, 'Volume' => 'kg'],
            ['id' => 6, 'nama' => 'Cuci Boneka', 'harga' => 10000, 'Volume' => 'biji'],
        ];
        return view('pengelolaan', compact('data'));
    }
}
