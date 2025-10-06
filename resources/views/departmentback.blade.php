<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Back | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar di atas -->
    <x-navbartop/>

    <!-- Sidebar + Main Content -->
    <div class="flex flex-1">

        <!-- Sidebar -->
        <x-sidebaradmin />

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="bg-white rounded-xl shadow p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-2">Selamat datang, {{ session('username') }}!</h2>
                <p class="text-gray-600">Manajemen Departments Rumah Sakit.</p>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form tambah department -->
            <form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label>Foto Department</label>
                        <input type="file" name="foto" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label>Nama Department</label>
                        <input type="text" name="nama" class="border p-2 w-full" required>
                    </div>
                    <div>
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="border p-2 w-full" required>
                    </div>
                </div>
                <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Tambah</button>
            </form>

            <!-- Tabel list department -->
            <div class="bg-white shadow rounded p-4">
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">Foto</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Deskripsi</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departments as $dept)
                        <tr>
                            <td class="border p-2 text-center">
                                <img src="{{ asset('storage/' . $dept->foto) }}" class="w-16 h-16 rounded-full object-cover mx-auto">
                            </td>
                            <td class="border p-2">{{ $dept->nama }}</td>
                            <td class="border p-2">{{ $dept->deskripsi }}</td>
                            <td class="border p-2 text-center">
                                <a href="{{ route('departmentback.edit', $dept->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">Edit</a>
                                <form action="{{ route('department.destroy', $dept->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus department ini?')" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800 font-semibold transition duration-200">
                    &larr; Kembali ke HomePage
                </a>
            </div>
        </main>
    </div>

</body>
</html>
