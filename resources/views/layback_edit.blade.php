<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Layanan | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

<x-sidebaradmin />

<main class="flex-1 p-8">
    <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-2">Edit Layanan</h2>
    </div>

    <form action="{{ route('layback.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="mb-6 bg-white shadow p-4 rounded">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label>Foto Layanan</label>
                <input type="file" name="foto" class="border p-2 w-full">
                <img src="{{ asset('storage/' . $service->foto) }}" class="w-16 h-16 mt-2 rounded-full object-cover">
            </div>
            <div>
                <label>Judul</label>
                <input type="text" name="judul" value="{{ $service->judul }}" class="border p-2 w-full" required>
            </div>
            <div>
                <label>Subjudul</label>
                <input type="text" name="subjudul" value="{{ $service->subjudul }}" class="border p-2 w-full">
            </div>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Update</button>
    </form>
</main>
</body>
</html>
