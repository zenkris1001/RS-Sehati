<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

@if(!session()->has('username'))
    @php
        header('Location: ' . route('login'));
        exit();
    @endphp
@endif

<!-- Sidebar -->
<x-sidebaradmin />

<!-- Main Content -->
<main class="flex-1 p-8">
    <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-2">Edit Department</h2>
        <p class="text-gray-600">Ubah data department Rumah Sakit.</p>
    </div>

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

    <!-- Form edit department -->
    <form action="{{ route('department.update', $department->id) }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label>Foto Department (biarkan kosong jika tidak diganti)</label>
                <input type="file" name="foto" class="border p-2 w-full">
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $department->foto) }}" class="w-32 h-32 object-cover rounded">
                </div>
            </div>
            <div>
                <label>Nama Department</label>
                <input type="text" name="nama" value="{{ $department->nama }}" class="border p-2 w-full" required>
            </div>
            <div>
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" value="{{ $department->deskripsi }}" class="border p-2 w-full" required>
            </div>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Simpan Perubahan</button>
    </form>

    <!-- Kembali ke Department Back -->
    <div class="mt-8 text-center">
        <a href="{{ route('departmentback') }}" 
           class="text-blue-600 hover:text-blue-800 font-semibold transition duration-200">
           &larr; Kembali ke Manajemen Department
        </a>
    </div>
</main>

</body>
</html>
