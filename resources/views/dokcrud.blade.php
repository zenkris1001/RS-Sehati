<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokter | RS App</title>
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
                <h2 class="text-2xl font-semibold mb-2">Kelola Dokter</h2>
                <p class="text-gray-600">Tambah, edit, dan hapus data dokter.</p>
            </div>

            <!-- Pesan Error / Success -->
            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Tambah Dokter -->
            <form action="{{ route('doktor.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block mb-1">Foto Dokter</label>
                        <input type="file" name="foto" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label class="block mb-1">Nama Dokter</label>
                        <input type="text" name="nama" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label class="block mb-1">Spesialis</label>
                        <input type="text" name="spesialist" class="border p-2 w-full" required>
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Tambah Dokter</button>
            </form>

            <!-- Tabel Dokter -->
            <div class="bg-white shadow rounded p-4 overflow-x-auto">
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Foto</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Spesialis</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor)
                        <tr>
                            <td class="border p-2 text-center">
                                <img src="{{ asset('storage/' . $doctor->foto) }}" class="w-16 h-16 object-cover rounded-full mx-auto">
                            </td>
                            <td class="border p-2">{{ $doctor->nama }}</td>
                            <td class="border p-2">{{ $doctor->spesialist }}</td>
                            <td class="border p-2 flex gap-2 justify-center">
                                <a href="{{ route('dokcrud.edit', $doctor->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('doktor.destroy', $doctor->id) }}" method="POST" onsubmit="return confirm('Yakin hapus dokter ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center p-4">Tidak ada dokter ditemukan</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
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
