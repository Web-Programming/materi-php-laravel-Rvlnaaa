@extends('layout.master')

@section('content')
<div class="container">
    <h2>Tambah Fakultas</h2>

    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Fakultas</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Simpan</button>
    </form>
</div>
@endsection
