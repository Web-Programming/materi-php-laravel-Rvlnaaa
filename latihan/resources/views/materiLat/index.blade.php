@extends('layout.master')
@section('title', 'Data Materi')
@section('page-title', 'Daftar Materi')
@section('breadcrumb', 'Materi')
@section('content')

<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Materi</h3></div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row mt-4">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tabel Data Materi</h5>
          </div>
          <div class="card-body">
            <a href="{{ route('materi.create') }}" class="btn btn-success mb-3">Tambah Materi</a>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $materi)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $materi->judul }}</td>
                    <td>{{ $materi->deskripsi }}</td>
                    <td>
                      <a href="{{ route('materi.show', $materi->id) }}" class="btn btn-info btn-sm">Detail</a>
                      <form action="{{ route('materi.destroy', $materi->id) }}" method="POST" onsubmit="return confirm('Yakin?')" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection