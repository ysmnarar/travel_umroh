@extends('layouts.app')

@section('content')
<form action="{{ route('admin.export.store') }}" method="GET">
    <label for="columns">Pilih Kolom yang Ingin Diexport:</label><br>
    <input type="checkbox" name="columns[]" value="nama"> Nama<br>
    <input type="checkbox" name="columns[]" value="alamat"> Alamat<br>
    <input type="checkbox" name="columns[]" value="jenis_kelamin"> Jenis Kelamin<br>
    <input type="checkbox" name="columns[]" value="provinsi"> Provinsi<br>
    <!-- Tambahkan kolom lainnya -->

    <label for="format">Pilih Format:</label><br>
    <select name="format">
        <option value="xlsx">Excel (.xlsx)</option>
        <option value="csv">CSV (.csv)</option>
    </select><br><br>

    <button type="submit">Export</button>
</form>
@endsection