@extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Mahasiswa</h3>
      </div>
      <form method="POST" action="{{ route('mahasiswa.store') }}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Prodi</label>
            <select name="prodi_id" class="form-control" required>
              @foreach($prodi as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Fakultas</label>
            <select name="fakultas_id" class="form-control" required>
              @foreach($fakultas as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection 
