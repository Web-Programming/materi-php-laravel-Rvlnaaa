 
@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h3>Detail Data Dosen</h3>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{ $dosen->nama }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $dosen->email }}</td>
        </tr>
        <tr>
            <th>Fakultas</th>
            <td>{{ $dosen->fakultas }}</td>
        </tr>
    </table>

    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
