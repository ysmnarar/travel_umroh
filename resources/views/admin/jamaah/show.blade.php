@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Jamaah</h1>

    <div class="card">
        <div class="card-header">
            {{ $jamaah->nama_lengkap }}
        </div>
        <div class="card-body">
            <p><strong>NIK:</strong> {{ $jamaah->nik }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $jamaah->tempat_lahir }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $jamaah->tanggal_lahir }}</p>
            <p><strong>Alamat:</strong> {{ $jamaah->alamat }}</p>
            <p><strong>Provinsi:</strong> {{ $jamaah->provinsi }}</p>
            <p><strong>Kabupaten/Kota:</strong> {{ $jamaah->kab_kota }}</p>
            <p><strong>Kecamatan:</strong> {{ $jamaah->kecamatan }}</p>
            <p><strong>Kelurahan:</strong> {{ $jamaah->kelurahan }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $jamaah->jenis_kelamin }}</p>
            <p><strong>No. Paspor:</strong> {{ $jamaah->no_paspor }}</p>
            <p><strong>Masa Berlaku Paspor:</strong> {{ $jamaah->masa_berlaku_paspor }}</p>
            <p><strong>No. Visa:</strong> {{ $jamaah->no_visa }}</p>
            <p><strong>Berlaku Sampai:</strong> {{ $jamaah->berlaku_sampai }}</p>
            <p><strong>Paket Dipilih:</strong> {{ $paket->nama_paket }}</p>
            <p><strong>Kamar Dipilih:</strong> {{ $kamar->jenis_kamar }}</p>
        </div>
    </div>

    <a href="{{ route('admin.jamaah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
