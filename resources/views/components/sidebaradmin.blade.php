
<!-- Sidebar + konten -->
<div class="flex">
    <!-- Sidebar -->
    <aside class="bg-gray-100 w-64 min-h-screen p-6 hidden md:block shadow-lg">
        <ul class="space-y-4">
            <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-blue-100 transition font-semibold">Beranda</a></li>
            <li><a href="{{ route('setting') }}" class="block py-2 px-4 rounded hover:bg-green-100 transition font-semibold">Setting</a></li>
            <li><a href="{{ route('dokcrud') }}" class="block py-2 px-4 rounded hover:bg-green-100 transition font-semibold">Dokter</a></li>
            <li><a href="{{ route('departmentback')}}" class="block py-2 px-4 rounded hover:bg-green-100 transition font-semibold">Department</a></li>
            <li><a href="{{ route('layback')}}" class="block py-2 px-4 rounded hover:bg-green-100 transition font-semibold">Layanan</a></li>
        </ul>
    </aside>

    <!-- Konten utama -->
    <main class="flex-1 p-6">
        <!-- Konten halaman akan masuk di sini -->
    </main>
</div>
