@extends('layouts.app')

@section('title', 'Detail Pegawai')

@section('content')
    <h1>Detail Pegawai</h1>
    <div class="card">
        <div class="card-header">
            {{ $pegawai->nama }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Jabatan: {{ $pegawai->jabatan }}</h5>
            <p class="card-text"><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
            <p class="card-text"><strong>Telepon:</strong> {{ $pegawai->telepon }}</p>
            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
