@extends('layout.master')
@section('title', 'Detail Program Studi')
@section('page-title', 'Detail Prodi')
@section('breadcrumb', 'Prodi')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-info text-white">Detail Program Studi</div>
    <div class="card-body">
      <p><strong>Nama Prodi:</strong> {{ $prodi->nama }}</p>
      <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</div>
@endsection