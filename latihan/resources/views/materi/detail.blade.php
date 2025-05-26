@extends('layout.master')

@section('content')
<div class="container">
    <h1 class="mb-3">{{ $materi['nama'] }}</h1>

    <img src="{{ asset('images/' . $materi['gambar']) }}" alt="{{ $materi['nama'] }}" class="img-fluid mb-3" style="max-width: 400px;">
    
    <p>{{ $materi['deskripsi'] }}</p>

    <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
