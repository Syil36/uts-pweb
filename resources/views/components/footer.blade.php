<footer class="bg-pink-100 text-gray-700">
    <div class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-3 gap-8">
        <!-- Deskripsi -->
        <div>
            <p class="font-semibold text-lg text-gray-800 mb-2">
                <em>LaundryCare</em>
            </p>
            <p class="text-sm leading-relaxed mb-4">
                adalah layanan laundry kiloan dan satuan. Kami adalah tim profesional yang selalu
                mengutamakan kualitas cucian & pelayanan dengan prinsip bersih, rapi, wangi,
                higienis & tepat waktu.
            </p>
            <!-- Social icons -->
            <div class="flex space-x-3 mt-4">
                @for ($i = 0; $i < 4; $i++)
                    <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white p-3 rounded-full transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 4h16v16H4z"/>
                        </svg>
                    </a>
                @endfor
            </div>
        </div>

        <!-- Menu -->
        <div>
            <h3 class="text-pink-500 font-semibold mb-3">Menu</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ url('/dashboard?username=' . urlencode(request()->query('username'))) }}" class="hover:text-pink-500">Dashboard</a></li>
                <li><a href="{{ url('/profile?username=' . urlencode(request()->query('username'))) }}" class="hover:text-pink-500">Profile</a></li>
                <li><a href="{{ url('/pengelolaan?username=' . urlencode(request()->query('username'))) }}" class="hover:text-pink-500">Pengelolaan</a></li>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-pink-500 font-semibold mb-3">Kontak</h3>
            <ul class="space-y-2 text-sm">
                <li class="flex items-center gap-2">
                    <div class="w-3 h-3 bg-pink-500 rounded-sm"></div>
                    0851 7445 0012
                </li>

                <h3 class="text-pink-500 font-semibold mb-3">Alamat</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-pink-500 rounded-sm"></div>
                        Jl. Kalimantan No.69, Kebonsari, Jember, Jawa Timur
                    </li>
                <h3 class="text-pink-500 font-semibold mb-3">Instagram</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-pink-500 rounded-sm"></div>
                        @laundrycare.jember
                    </li>
            </ul>
        </div>
    </div>

    <!-- Footer bawah -->
    <div class="bg-pink-500 text-white py-3 px-6 text-sm flex flex-col md:flex-row justify-center items-center">
        <div>
            Copyright &copy; LaundryCare {{ date('Y') }}
        </div>
    </div>
</footer>
