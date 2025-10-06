<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter | RS App</title>
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
                <h2 class="text-2xl font-semibold mb-2">Edit Dokter</h2>
                <p class="text-gray-600">Perbarui data dokter yang dipilih.</p>
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

            <!-- Form Edit Dokter -->
            <form action="{{ route('doktor.update', $doctor->id) }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block mb-1">Foto Dokter Saat Ini</label>
                        <img src="{{ asset('storage/' . $doctor->foto) }}" class="w-32 h-32 object-cover rounded-full mb-2">
                        <label class="block mb-1">Ganti Foto</label>
                        <input type="file" name="foto" class="border p-2 w-full">
                        <p class="text-gray-500 text-sm mt-1">Kosongkan jika tidak ingin mengganti foto</p>
                    </div>
                    <div>
                        <label class="block mb-1">Nama Dokter</label>
                        <input type="text" name="nama" value="{{ old('nama', $doctor->nama) }}" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label class="block mb-1">Spesialis</label>
                        <input type="text" name="spesialist" value="{{ old('spesialist', $doctor->spesialist) }}" class="border p-2 w-full" required>
                    </div>
                </div>
                <div class="mt-4 flex gap-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Update</button>
                    <a href="{{ route('dokcrud') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 py-2 px-4 rounded">Batal</a>
                </div>
            </form>

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
