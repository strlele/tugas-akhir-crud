<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alamat;
use Illuminate\Support\Facades\Auth;

class AlamatController extends Controller
{
    // Menampilkan daftar alamat (Read)
    public function index()
    {
        $alamats = Alamat::where('user_id', auth()->id())->get(); // Hanya alamat milik user yang login
        return view('profile.alamat', compact('alamats'));
    }

    // Menampilkan form untuk menambah alamat baru (Create)
    public function create()
    {
        return view('profile.create');
    }

    // Menyimpan alamat baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'alamat_lengkap' => 'required|string|max:255',
            'kota' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
        ]);

        // Menyimpan alamat baru untuk user yang sedang login
        Alamat::create([
            'user_id' => auth()->id(), // Menyimpan user_id yang login
            'alamat_lengkap' => $validated['alamat_lengkap'],
            'kota' => $validated['kota'],
            'provinsi' => $validated['provinsi'],
            'kode_pos' => $validated['kode_pos'],
        ]);

        return redirect()->route('alamats.index')->with('success', 'Alamat berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit alamat (Update)
    public function edit($id)
    {
        $alamat = Alamat::where('user_id', auth()->id())->findOrFail($id);
        return view('profile.edit-alamat', compact('alamat'));
    }

    // Memperbarui alamat di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'alamat_lengkap' => 'required|string|max:255',
            'kota' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kode_pos' => 'required|string|max:10',
        ]);

        // Mencari alamat berdasarkan ID dan user yang login
        $alamat = Alamat::where('user_id', auth()->id())->findOrFail($id);

        // Update data alamat
        $alamat->update($validated);

        // Redirect kembali ke halaman daftar alamat
        return redirect()->route('alamats.index')->with('success', 'Alamat berhasil diperbarui!');
    }


    // Menghapus alamat dari database
    public function destroy($id)
    {
        $alamat = Alamat::where('user_id', auth()->id())->findOrFail($id);
        $alamat->delete();

        return redirect()->route('alamats.index')->with('success', 'Alamat berhasil dihapus!');
    }
}
