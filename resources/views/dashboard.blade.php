<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<x-navbartop/>
    
    <div class="flex flex-1">
        <!-- Sidebar -->
        <x-sidebaradmin />


        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-2">Selamat datang, {{ session('username') }}!</h2>
                <p class="text-gray-600">Ini adalah dashboard Anda.</p>
            </div>

            <!-- Menu Card -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <a href="{{ route('dokcrud') }}" class="block">
        <div class="bg-blue-100 rounded-xl p-6 shadow hover:bg-blue-200 transition duration-200">
            <h3 class="text-lg font-bold mb-2">Data Dokter</h3>
            <p class="text-gray-700">Kelola data Dokter rumah sakit.</p>
        </div>
    </a>

    <a href="{{ route('departmentback') }}" class="block">
        <div class="bg-green-100 rounded-xl p-6 shadow hover:bg-green-200 transition duration-200">
            <h3 class="text-lg font-bold mb-2">Department</h3>
            <p class="text-gray-700">Kelola Department/Fasilitas.</p>
        </div>
    </a>

    <a href="{{ route('setting') }}" class="block">
        <div class="bg-purple-100 rounded-xl p-6 shadow hover:bg-purple-200 transition duration-200">
            <h3 class="text-lg font-bold mb-2">Pengaturan</h3>
            <p class="text-gray-700">Ubah profil dan pengaturan akun Anda.</p>
        </div>
    </a>

    <a href="{{ route('layback') }}" class="block">
        <div class="bg-pink-100 rounded-xl p-6 shadow hover:bg-pink-200 transition duration-200">
            <h3 class="text-lg font-bold mb-2">Layanan</h3>
            <p class="text-gray-700">Kelola Layanan Yang Ada Di Rumah Sakit</p>
        </div>
    </a>

</div>


            <!-- Kembali ke HomePage -->
            <div class="mt-8 text-center">
                <a href="{{ url('/') }}" 
                   class="text-blue-600 hover:text-blue-800 font-semibold transition duration-200">
                   &larr; Kembali ke HomePage
                </a>
            </div>
        </main>
    </div>

</body>
</html>
