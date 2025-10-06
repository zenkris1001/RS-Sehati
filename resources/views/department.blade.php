<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <x-hero-section 
        title="Ada Fasilitas!" 
        subtitle="Informasi Lebih Lanjut :" 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    <!-- Main Content -->
   <main class="flex-1 p-8 container mx-auto mt-12">

        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-2">Departments Rumah Sakit</h2>
            <p class="text-gray-600">Daftar department dan penjelasan fungsinya.</p>
        </div>

        <!-- Tabel list department -->
        <div class="bg-white shadow rounded p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($departments as $dept)
                    <div class="border rounded p-4 flex flex-col items-center text-center">
                        <img src="{{ asset('storage/' . $dept->foto) }}" class="w-32 h-32 object-cover rounded mb-4">
                        <h3 class="font-bold text-lg mb-2">{{ $dept->nama }}</h3>
                        <p class="text-gray-700">{{ $dept->deskripsi }}</p>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada department yang tersedia.</p>
                @endforelse
            </div>
        </div>

        <!-- Kembali ke HomePage -->
        <div class="mt-8 text-center">
            <a href="{{ url('/') }}" 
               class="text-blue-600 hover:text-blue-800 font-semibold transition duration-200">
               &larr; Kembali ke HomePage
            </a>
        </div>
    </main>

    <x-copyright />
</body>
</html>
