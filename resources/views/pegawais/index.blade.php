@extends('layouts.app')

@section('title', 'Data Pegawai Damkar')

@section('content')
    <h1>Data Pegawai Damkar</h1>
    <a href="{{ route('pegawais.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->telepon }}</td>
                <td>
    <a href="{{ route('pegawais.show', $pegawai) }}" class="btn btn-info btn-sm">Detail</a>
    <a href="{{ route('pegawais.edit', $pegawai) }}" class="btn btn-warning btn-sm">Edit</a>
    <form action="{{ route('pegawais.destroy', $pegawai) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</td>

            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
