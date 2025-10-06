<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Layanan | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar di atas -->
    <x-navbartop/>

    <!-- Sidebar + Main Content -->
    <div class="flex flex-1">
        <x-sidebaradmin />

        <main class="flex-1 p-8">
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-2">Manajemen Layanan</h2>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <!-- Form tambah layanan -->
            <form action="{{ route('layback.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label>Foto Layanan</label>
                        <input type="file" name="foto" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label>Judul</label>
                        <input type="text" name="judul" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label>Subjudul</label>
                        <input type="text" name="subjudul" class="border p-2 w-full">
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Tambah</button>
            </form>

            <!-- Tabel layanan -->
            <div class="bg-white shadow rounded p-4">
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Foto</th>
                            <th class="border p-2">Judul</th>
                            <th class="border p-2">Subjudul</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td class="border p-2 text-center">
                                <img src="{{ asset('storage/' . $service->foto) }}" class="w-16 h-16 rounded-full object-cover mx-auto">
                            </td>
                            <td class="border p-2">{{ $service->judul }}</td>
                            <td class="border p-2">{{ $service->subjudul }}</td>
                            <td class="border p-2 text-center">
                                <a href="{{ route('layback.edit', $service->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('layback.destroy', $service->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus layanan ini?')" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
