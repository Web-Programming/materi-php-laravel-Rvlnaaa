@extends('layout.master')

@section('title', 'Universitas MDP')

@section('content')
<main class="app-main" style="background-image: url('/img/kampus3.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-light">Materi</h1>

        @foreach($materi as $materi)
        <div class="row mb-5 fade-in">
            <div class="col-md-4 ">
                <img src="{{ asset('img/' . $materi['gambar']) }}" class="img-fluid rounded" alt="{{ $materi['nama'] }}">
            </div>
            <div class="col-md-5 mt-2">
                <h2 class="text-light">{{ $materi['nama'] }}</h2>
                
                <!-- Tombol Detail -->
                <a href="{{ route('materi.detail', $materi['id']) }}" class="btn btn-primary">Detail</a>

                <!-- Tombol Hapus -->
                <form action="{{ route('materi.destroy', $materi['id']) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus materi ini?')">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach

        <a href="{{ route('materi.create') }}" class="btn btn-success mb-5">Tambah Materi</a>
    </div>
</main>
@endsection