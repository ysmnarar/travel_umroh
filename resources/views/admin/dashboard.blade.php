@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Admin</h1>
    <p>Selamat datang di dashboard admin, {{ Auth::user()->name }}!</p>

    <a href="{{ route('admin.jamaah.index') }}" class="btn btn-primary">Kelola Data Jamaah</a>
</div>
@endsection
