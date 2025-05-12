@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h3>Tambah Data Dosen</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Dosen</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Dosen</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" class="form-control" id="fakultas" value="{{ old('fakultas') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
