@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kamar</h1>
        <a href="{{ route('admin.kamar.create') }}" class="btn btn-primary mb-3">Tambah Kamar</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Deskripsi Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kamars as $kamar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kamar->jenis_kamar }}</td>
                    <td>{{ $kamar->deskripsi_kamar }}</td>
                    <td>
                        <a href="{{ route('admin.kamar.edit', $kamar->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
