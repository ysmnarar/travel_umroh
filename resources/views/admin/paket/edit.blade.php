@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Paket</h1>
        <form action="{{ route('admin.paket.update', $paket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_paket" class="form-label">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $paket->nama_paket }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi_paket" class="form-label">Deskripsi Paket</label>
                <input type="text" class="form-control" id="deskripsi_paket" name="deskripsi_paket" value="{{ $paket->deskripsi_paket }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
