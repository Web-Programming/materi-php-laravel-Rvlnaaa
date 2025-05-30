@extends('layout.master')

@section('title', 'Fakultas - Universitas MDP')

@section('content')
<main class="app-main">
    <div class="container py-4">
        <h1 class="mb-4">Fakultas Universitas MDP</h1>
        <div class="row g-4">

            @foreach($fakultas as $fak)
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <img src="{{ $fak->gambar }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="{{ $fak->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fak->nama }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($fak->deskripsi, 120) }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('fakultas.detail', $fak->id) }}" class="btn btn-outline-primary">Detail</a>
                            <form action="{{ route('fakultas.destroy', $fak->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus fakultas ini?')">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="mt-4">
            <a href="{{ route('fakultas.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Fakultas
            </a>
        </div>
    </div>
</main>
@endsection
