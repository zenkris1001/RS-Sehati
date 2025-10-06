<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    // Backend: list semua department
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $departments = Department::all();
        return view('departmentback', compact('departments'));
    }

    // Backend: tampil form edit
    public function edit($id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $department = Department::findOrFail($id);
        return view('departmentback_edit', compact('department'));
    }

    // Backend: simpan department baru
    public function store(Request $request)
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $validated = $request->validate([
            'foto' => 'required|image|max:2048',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
        ]);

        $path = $request->file('foto')->store('departments', 'public');

        Department::create([
            'foto' => $path,
            'nama' => $validated['nama'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('departmentback')->with('success', 'Department berhasil ditambahkan!');
    }

    // Backend: update department
    public function update(Request $request, $id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $department = Department::findOrFail($id);

        $validated = $request->validate([
            'foto' => 'nullable|image|max:2048',
            'nama' => 'required|string|max:100',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($department->foto && Storage::disk('public')->exists($department->foto)) {
                Storage::disk('public')->delete($department->foto);
            }

            $path = $request->file('foto')->store('departments', 'public');
            $department->foto = $path;
        }

        $department->nama = $validated['nama'];
        $department->deskripsi = $validated['deskripsi'];
        $department->save();

        return redirect()->route('departmentback')->with('success', 'Department berhasil diperbarui!');
    }

    // Backend: hapus department
    public function destroy($id)
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $department = Department::findOrFail($id);

        if ($department->foto && Storage::disk('public')->exists($department->foto)) {
            Storage::disk('public')->delete($department->foto);
        }

        $department->delete();

        return redirect()->route('departmentback')->with('success', 'Department berhasil dihapus!');
    }

    // Frontend: tampil department di halaman publik
    public function show()
    {
        $departments = Department::all();
        return view('department', compact('departments'));
    }
}
