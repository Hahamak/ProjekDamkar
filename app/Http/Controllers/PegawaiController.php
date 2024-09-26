<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawais.index', compact('pegawais'));
    }
    public function dashboard()
{
    $pegawais = Pegawai::all(); // Ambil semua data pegawai
    return view('dashboard', compact('pegawais'));
}


    public function create()
    {
        return view('pegawais.create');
    }
    public function show(Pegawai $pegawai)
{
    return view('pegawais.show', compact('pegawai'));
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $pegawai->update($request->all());
        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
