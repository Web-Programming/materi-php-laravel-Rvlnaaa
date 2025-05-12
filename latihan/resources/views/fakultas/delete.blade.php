@extends('layout.master')

@section('content')
<div class="container">
    <h2>Hapus Fakultas</h2>

    <p>Apakah kamu yakin ingin menghapus fakultas dengan ID {{ $id }}?</p>

    <form action="{{ route('fakultas.destroy', $id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
