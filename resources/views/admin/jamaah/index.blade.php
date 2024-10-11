@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Jamaah</h1>
    <a href="{{ route('admin.jamaah.create') }}" class="btn btn-primary">Tambah Data Jamaah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jamaah as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_lengkap }}</td>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->tempat_lahir }}</td>
                    <td>{{ $row->tanggal_lahir }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>
                        <a href="{{ route('admin.jamaah.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.jamaah.show', $row->id) }}" class="btn btn-info">Detail</a>
                        <form action="{{ route('admin.jamaah.destroy', $row->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection