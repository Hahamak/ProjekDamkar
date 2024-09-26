@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
    <h1>Edit Pegawai</h1>
    <form action="{{ route('pegawais.update', $pegawai) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $pegawai->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control" value="{{ $pegawai->jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $pegawai->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon:</label>
            <input type="text" id="telepon" name="telepon" class="form-control" value="{{ $pegawai->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
