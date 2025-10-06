<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor; // Pastikan sudah ada model Doctor
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    // Tampilkan halaman backend daftar dokter (CRUD)
    public function crud()
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $doctors = Doctor::all();
        return view('dokcrud', compact('doctors'));
    }

    // Simpan dokter baru
    public function store(Request $request)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $validated = $request->validate([
            'foto' => 'required|image|max:2048',
            'nama' => 'required|string|max:255',
            'spesialist' => 'required|string|max:255',
        ]);

        $path = $request->file('foto')->store('doctors', 'public');

        Doctor::create([
            'foto' => $path,
            'nama' => $validated['nama'],
            'spesialist' => $validated['spesialist'],
        ]);

        return redirect()->route('dokcrud')->with('success', 'Dokter berhasil ditambahkan!');
    }

    // Tampilkan form edit dokter
    public function edit($id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $doctor = Doctor::findOrFail($id);
        return view('dokcrud_edit', compact('doctor'));
    }

    // Update dokter
    public function update(Request $request, $id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $doctor = Doctor::findOrFail($id);

        $validated = $request->validate([
            'foto' => 'nullable|image|max:2048',
            'nama' => 'required|string|max:255',
            'spesialist' => 'required|string|max:255',
        ]);

        // Upload foto baru jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($doctor->foto && Storage::disk('public')->exists($doctor->foto)) {
                Storage::disk('public')->delete($doctor->foto);
            }

            $path = $request->file('foto')->store('doctors', 'public');
            $doctor->foto = $path;
        }

        $doctor->nama = $validated['nama'];
        $doctor->spesialist = $validated['spesialist'];
        $doctor->save();

        return redirect()->route('dokcrud')->with('success', 'Dokter berhasil diperbarui!');
    }

    // Hapus dokter
    public function destroy($id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silahkan login terlebih dahulu');
        }

        $doctor = Doctor::findOrFail($id);

        // Hapus foto dari storage
        if ($doctor->foto && Storage::disk('public')->exists($doctor->foto)) {
            Storage::disk('public')->delete($doctor->foto);
        }

        $doctor->delete();

        return redirect()->route('dokcrud')->with('success', 'Dokter berhasil dihapus!');
    }

    // Tampilkan frontend daftar dokter
    public function index(Request $request)
    {
        $query = Doctor::query();

        // Search nama
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        // Filter spesialist
        if ($request->filled('spesialist')) {
            $query->where('spesialist', $request->spesialist);
        }

        $doctors = $query->get();

        // Ambil daftar spesialist unik untuk filter
        $spesialistList = Doctor::select('spesialist')->distinct()->pluck('spesialist');

        return view('doktor', compact('doctors', 'spesialistList'));
    }
}
