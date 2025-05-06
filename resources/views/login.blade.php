<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - LaundryCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-tr from-pink-100 via-pink-200 to-fuchsia-100">
    <div class="w-full max-w-sm p-6 bg-white rounded-2xl shadow-xl transition-transform hover:scale-[1.02]">
        <div class="flex flex-col items-center mb-6">
            <!-- Icon themed for laundry -->
            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-12 h-12">
            <h2 class="mt-2 text-2xl font-bold text-pink-600">Login LaundryCare</h2>
            <p class="text-sm text-pink-500">Masuk untuk mulai mencuci dengan mudah</p>
        </div>
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1 text-sm font-medium text-pink-600">Username</label>
                <input type="text" name="username" placeholder="Masukkan username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300" required>
            </div>
            <div>
                <label class="block mb-1 text-sm font-medium text-pink-600">Password</label>
                <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300" required>
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-pink-500 rounded-lg hover:bg-pink-600 transition-colors">Login</button>
        </form>
        <p class="mt-4 text-sm text-center text-pink-500">Belum punya akun? <a href="#" class="text-pink-600 hover:underline">Daftar sekarang</a></p>
    </div>
</body>
</html>
