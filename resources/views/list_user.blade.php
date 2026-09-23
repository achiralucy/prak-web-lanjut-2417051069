@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0">Daftar Mahasiswa</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah Mahasiswa</a>
    </div>

    <x-user_table :users="$users" />
@endsection