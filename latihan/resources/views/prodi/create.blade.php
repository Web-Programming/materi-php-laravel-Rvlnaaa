@extends('layout.master')
@section('title', 'Tambah Program Studi')
@section('page-title', 'Tambah Prodi')
@section('breadcrumb', 'Prodi')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-success text-white">Form Tambah Prodi</div>
    <div class="card-body">
      <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Program Studi</label>
          <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>
@endsection