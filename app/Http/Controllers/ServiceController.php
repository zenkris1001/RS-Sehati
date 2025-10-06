<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    // FRONTEND: tampilkan layanan (tidak perlu login)
    public function frontend()
    {
        $services = Service::all();
        return view('layanan', compact('services'));
    }

    // BACKEND: list semua layanan (harus login)
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $services = Service::all();
        return view('layback', compact('services'));
    }

    // simpan layanan baru
    public function store(Request $request)
    {
        if (!session()->has('username')) return redirect()->route('login');

        $request->validate([
            'foto' => 'required|image|max:2048',
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string',
        ]);

        $path = $request->file('foto')->store('services', 'public');

        Service::create([
            'foto' => $path,
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
        ]);

        return redirect()->route('layback')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // edit layanan
    public function edit($id)
    {
        if (!session()->has('username')) return redirect()->route('login');

        $service = Service::findOrFail($id);
        return view('layback_edit', compact('service'));
    }

    // update layanan
    public function update(Request $request, $id)
    {
        if (!session()->has('username')) return redirect()->route('login');

        $service = Service::findOrFail($id);

        $request->validate([
            'foto' => 'nullable|image|max:2048',
            'judul' => 'required|string|max:255',
            'subjudul' => 'nullable|string',
        ]);

        $data = [
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
        ];

        if ($request->hasFile('foto')) {
            // hapus foto lama
            if ($service->foto && Storage::disk('public')->exists($service->foto)) {
                Storage::disk('public')->delete($service->foto);
            }
            $data['foto'] = $request->file('foto')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('layback')->with('success', 'Layanan berhasil diupdate.');
    }

    // hapus layanan
    public function destroy($id)
    {
        if (!session()->has('username')) return redirect()->route('login');

        $service = Service::findOrFail($id);

        if ($service->foto && Storage::disk('public')->exists($service->foto)) {
            Storage::disk('public')->delete($service->foto);
        }

        $service->delete();

        return redirect()->route('layback')->with('success', 'Layanan berhasil dihapus.');
    }
}
