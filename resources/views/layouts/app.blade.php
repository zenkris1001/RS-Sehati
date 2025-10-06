<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="font-bold text-lg">Home</a>
            <div class="space-x-4">
                <a href="{{ route('doktor.index') }}">Dokter</a>
                <a href="{{ route('dokcrud') }}">CRUD Dokter</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="py-6">
        @yield('content')
    </main>

</body>
</html>
