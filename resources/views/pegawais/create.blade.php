@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
    <h1>Tambah Pegawai</h1>
    <form action="{{ route('pegawais.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon:</label>
            <input type="text" id="telepon" name="telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
