<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-title>Dokter | RS Sehati</x-title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <x-navbar></x-navbar>

    <!-- Hero Section -->
    <x-hero-section 
        title="Daftar Dokter RS Sehati" 
        subtitle="Lihat profil dokter kami dan spesialisasinya." 
        serviceRoute="layanan" 
        contactRoute="kontak" 
    />

    <!-- Search & Filter -->
    <div class="container mx-auto p-6">
        <form method="GET" action="{{ route('doktor') }}" class="mb-6 flex gap-4">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama dokter..." class="border p-2 w-1/3 rounded">
            <select name="spesialist" class="border p-2 w-1/3 rounded">
                <option value="">-- Filter Spesialis --</option>
                @foreach($spesialistList as $sp)
                    <option value="{{ $sp }}" {{ request('spesialist') == $sp ? 'selected' : '' }}>{{ $sp }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 rounded">Cari</button>
        </form>

        <!-- Tabel Dokter -->
        <div class="bg-white shadow rounded p-4">
            <table class="w-full border border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">Foto</th>
                        <th class="border p-2">Nama</th>
                        <th class="border p-2">Spesialis</th>
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
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center p-4">Tidak ada dokter ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Info Cards Section -->
    <x-info-cards></x-info-cards>

    <!-- Tentang Kami Section -->
    <section id="about" class="py-20 bg-white my-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
            <p class="text-lg text-gray-600 mb-12">RS Sehati berdiri untuk memberikan pelayanan kesehatan terbaik dengan profesionalisme, empati, dan teknologi modern.</p>
            <div class="grid md:grid-cols-2 gap-12 items-center text-left">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Visi</h3>
                    <p class="text-gray-600 mb-6">Menjadi rumah sakit unggulan dengan pelayanan kesehatan terbaik dan berorientasi pada keselamatan pasien.</p>
                    <h3 class="text-2xl font-bold mb-4">Misi</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Memberikan pelayanan medis berkualitas.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Mengutamakan keselamatan dan kenyamanan pasien.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Mengembangkan tenaga medis profesional.</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i> Memanfaatkan teknologi modern dalam pelayanan.</li>
                    </ul>
                </div>
                <div>
                    <img src="https://placeholder-image-service.onrender.com/image/600x400?prompt=modern+hospital+building&id=rs-profile" alt="Rumah Sakit" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <x-copyright />

</body>
</html>
