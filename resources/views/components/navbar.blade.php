<nav class="bg-pink-200 p-4 flex justify-between">
    <div>
        <a class="" href="{{ url('/dashboard?username=' . urlencode(request()->query('username'))) }}" class="mr-4">Dashboard</a>
        <a href="{{ url('/profile?username=' . urlencode(request()->query('username'))) }}" class="mr-4">Profil</a>
        <a href="{{ url('/pengelolaan?username=' . urlencode(request()->query('username'))) }}">Pengelolaan</a>
    </div>
</nav>
