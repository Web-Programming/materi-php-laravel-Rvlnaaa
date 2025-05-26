@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h3>Tambah Mahasiswa</h3>
    <form action="{{ route('mhs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <select name="prodi" class="form-control" required>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Manajemen">Manajemen</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mhs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
