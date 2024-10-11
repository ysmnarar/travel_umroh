@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Paket</h1>
        <a href="{{ route('admin.paket.create') }}" class="btn btn-primary mb-3">Tambah Paket</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Deskripsi Paket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pakets as $paket)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $paket->nama_paket }}</td>
                    <td>{{ $paket->deskripsi_paket }}</td>
                    <td>
                        <a href="{{ route('admin.paket.edit', $paket->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
