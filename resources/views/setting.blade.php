<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Setting | RS App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<x-navbartop/>
    <div class="flex flex-1">
        <!-- Sidebar -->
        <x-sidebaradmin />

        <!-- Main -->
        <main class="flex-1 p-8">
            {{-- flash message --}}
            @if(session('success'))
                <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-800 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Form tambah user -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold mb-4">Tambah User</h3>
                    <form action="{{ route('setting.users.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="block text-sm font-medium text-gray-700">Username</label>
                            <input type="text" name="username" required class="mt-1 w-full border px-3 py-2 rounded" value="{{ old('username') }}">
                        </div>
                        <div class="mb-3">
                            <label class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" required class="mt-1 w-full border px-3 py-2 rounded" placeholder="Minimal 3 karakter">
                        </div>
                        <button type="submit" class="mt-2 w-full bg-blue-600 text-white py-2 rounded hover:opacity-90">Tambah</button>
                    </form>
                </div>

                <!-- Info / bantuan -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold mb-2">Petunjuk</h3>
                    <ul class="text-sm text-gray-700 list-disc pl-5">
                        <li>Username harus unik.</li>
                        <li>Password akan otomatis di-hash sebelum disimpan.</li>
                        <li>Untuk mengedit, klik tombol <strong>Edit</strong> pada baris user.</li>
                        <li>Untuk menghapus, klik tombol <strong>Delete</strong>.</li>
                    </ul>
                </div>

                <!-- Placeholder / statistik singkat -->
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold mb-2">Statistik</h3>
                    <p class="text-gray-700">Total user: <strong>{{ $users->count() }}</strong></p>
                </div>
            </div>

            <!-- Table users -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-4">Daftar Users</h3>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="text-left text-sm text-gray-600 border-b">
                                
                                <th class="py-2 px-2">Username</th>
                                <th class="py-2 px-2">Created At</th>
                               
                                <th class="py-2 px-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $u)
                                <tr class="border-b">
                                    
                                    <td class="py-2 px-2">{{ $u->username }}</td>
                                    <td class="py-2 px-2">{{ $u->created_at }}</td>
                                    
                                    <td class="py-2 px-2">
                                        <!-- Edit: buka modal dan isi form -->
                                        <button 
                                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded mr-2"
                                            onclick="openEditModal({{ json_encode($u) }})">
                                            Edit
                                        </button>

                                        <!-- Delete: form dengan method DELETE -->
                                        <form action="{{ route('setting.users.destroy', $u->id) }}" method="POST" class="inline" onsubmit="return confirm('Hapus user {{ $u->username }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if($users->isEmpty())
                                <tr>
                                    <td colspan="5" class="py-4 px-2 text-center text-gray-500">Belum ada user.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Back to home -->
            <div class="mt-6 text-center">
                <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800 font-semibold">&larr; Kembali ke HomePage</a>
            </div>
        </main>
    </div>

    <!-- Edit Modal (hidden default) -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black/50 hidden z-50">
        <div class="bg-white rounded-lg w-96 p-6">
            <h3 class="text-lg font-semibold mb-4">Edit User</h3>
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Username</label>
                    <input id="editUsername" type="text" name="username" required class="mt-1 w-full border px-3 py-2 rounded">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700">Password (kosongkan jika tidak ingin mengganti)</label>
                    <input id="editPassword" type="password" name="password" class="mt-1 w-full border px-3 py-2 rounded" placeholder="Isi jika ingin mengganti password">
                </div>

                <div class="flex justify-end space-x-2 mt-4">
                    <button type="button" onclick="closeEditModal()" class="px-4 py-2 rounded border">Batal</button>
                    <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal script -->
    <script>
        function openEditModal(user) {
            // user is object with id, username, created_at, updated_at
            document.getElementById('editModal').classList.remove('hidden');

            // set form action to /setting/users/{id}
            const form = document.getElementById('editForm');
            form.action = '/setting/users/' + user.id;

            // set username value
            document.getElementById('editUsername').value = user.username;

            // clear password field
            document.getElementById('editPassword').value = '';
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // close modal on ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeEditModal();
        });
    </script>

</body>
</html>
