 @extends('layouts.master')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Detail Mahasiswa</h3>
      </div>
      <div class="card-body">
        <table class="table">
          <tr><th>NPM</th><td>{{ $mahasiswa->npm }}</td></tr>
          <tr><th>Nama</th><td>{{ $mahasiswa->nama }}</td></tr>
          <tr><th>Prodi</th><td>{{ $mahasiswa->prodi->nama ?? '-' }}</td></tr>
          <tr><th>Fakultas</th><td>{{ $mahasiswa->fakultas->nama ?? '-' }}</td></tr>
          <tr><th>Alamat</th><td>{{ $mahasiswa->alamat }}</td></tr>
        </table>
      </div>
      <div class="card-footer">
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</section>
@endsection
