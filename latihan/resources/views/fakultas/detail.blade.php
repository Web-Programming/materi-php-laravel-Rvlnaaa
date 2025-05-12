@extends('layout.master')

@section('content')
<div class="container">
    <h2>Detail Fakultas</h2>

    <p><strong>ID:</strong> {{ $id }}</p>
    <p><strong>Nama Fakultas:</strong> Fakultas Contoh (data dinamis nanti)</p>

    <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
