<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    // tampilkan halaman setting dan list users
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $users = DB::table('users')->select('id', 'username', 'created_at', 'updated_at')->get();

        return view('setting', compact('users'));
    }

    // simpan user baru (password di-hash otomatis)
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:3',
        ]);

        DB::table('users')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('setting')->with('success', 'User berhasil ditambahkan.');
    }

    // update user (jika password dikosongkan => tidak diubah, jika ada => di-hash)
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:users,username,' . $id,
            'password' => 'nullable|string|min:3',
        ]);

        $data = [
            'username' => $request->username,
            'updated_at' => now(),
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('users')->where('id', $id)->update($data);

        return redirect()->route('setting')->with('success', 'User berhasil diupdate.');
    }

    // hapus user
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('setting')->with('success', 'User berhasil dihapus.');
    }
}
