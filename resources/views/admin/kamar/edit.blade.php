@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kamar</h1>
        <form action="{{ route('admin.kamar.update', $kamar->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kamar</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kamar->nama }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $kamar->harga }}">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
