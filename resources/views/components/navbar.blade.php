<nav class="fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-pink-100 via-pink-200 to-fuchsia-100 shadow-lg p-4 rounded-xl">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-pink-700 font-bold text-xl tracking-wide flex items-center gap-2">
            <!-- LaundryCare Icon -->
            <img src="{{ asset('assets/logo.png') }}" alt="" class="w-8 h-8 ml-4 mr-4">
            LaundryCare
        </div>
        <div class="flex space-x-6 text-sm md:text-base">
            <a href="{{ url('/dashboard?username=' . urlencode(request()->query('username'))) }}"
               class="text-pink-700 hover:text-white hover:bg-pink-500 px-3 py-1 rounded-md transition duration-300 flex items-center gap-1">
                <!-- Dashboard Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
                </svg>
                Dashboard
            </a>
            <a href="{{ url('/profile?username=' . urlencode(request()->query('username'))) }}"
               class="text-pink-700 hover:text-white hover:bg-pink-500 px-3 py-1 rounded-md transition duration-300 flex items-center gap-1">
                <!-- Profile Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5.121 17.804A13.937 13.937 0 0112 15c2.165 0 4.198.514 6.01 1.42M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Profil
            </a>
            <a href="{{ url('/pengelolaan?username=' . urlencode(request()->query('username'))) }}"
               class="text-pink-700 hover:text-white hover:bg-pink-500 px-3 py-1 rounded-md transition duration-300 flex items-center gap-1">
                <!-- Services Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 17v-2a2 2 0 00-2-2H5a2 2 0 00-2 2v2m16 0v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2v2M7 7h10M7 7V5a2 2 0 012-2h2a2 2 0 012 2v2M7 7h10" />
                </svg>
                Pengelolaan
            </a>
        </div>
    </div>
</nav>
