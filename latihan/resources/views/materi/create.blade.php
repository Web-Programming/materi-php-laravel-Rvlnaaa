@extends('layout.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Materi</h1>

    <form action="{{ route('materi.create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Materi</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
