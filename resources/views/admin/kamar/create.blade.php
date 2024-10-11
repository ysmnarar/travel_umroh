@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kamar</h1>
        <form action="{{ route('admin.kamar.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jenis_kamar" class="form-label">Nama Kamar</label>
                <input type="text" class="form-control" id="jenis_kamar" name="jenis_kamar">
            </div>
            <div class="mb-3">
                <label for="deskripsi_kamar" class="form-label">Deskripsi Kamar</label>
                <input type="text" class="form-control" id="deskripsi_kamar" name="deskripsi_kamar">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
