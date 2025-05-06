<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'MyApp')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    @include('components.navbar')

    <main class="p-6 flex-1">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
