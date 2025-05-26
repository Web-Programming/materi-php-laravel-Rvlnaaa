@extends('layout.master')

@section('content')
<div class="container mt-4">
    <h3>Detail Mahasiswa</h3>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $mahasiswa->nama }}</li>
        <li class="list-group-item"><strong>NIM:</strong> {{ $mahasiswa->nim }}</li>
        <li class="list-group-item"><strong>Prodi:</strong> {{ $mahasiswa->prodi }}</li>
    </ul>
    <br>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
