@extends('layouts.app')

@section('title', 'Dashboard Pegawai')

@section('content')
    <h1>Dashboard Pegawai</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Daftar Pegawai</h2>
    @if ($pegawais->isEmpty())
        <div class="alert alert-warning">Belum ada pegawai yang terdaftar.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->telepon }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
