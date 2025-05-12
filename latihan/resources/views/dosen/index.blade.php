@extends('layout.master')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Daftar Dosen Universitas MDP</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dosen</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      {{-- Contoh data dosen, bisa diganti dengan loop dari database --}}
      <div class="col-lg-6 col-12 mb-3">
        <div class="small-box text-bg-info">
          <div class="inner">
            <h4>Dr. Andi Wijaya</h4>
            <p>Fakultas Ilmu Komputer</p>
            <p>Email: andi.wijaya@mdp.ac.id</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Detail &raquo;</a>
        </div>
      </div>

      <div class="col-lg-6 col-12 mb-3">
        <div class="small-box text-bg-warning">
          <div class="inner">
            <h4>Prof. Siti Aminah</h4>
            <p>Fakultas Ekonomi dan Bisnis</p>
            <p>Email: siti.aminah@mdp.ac.id</p>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">Detail &raquo;</a>
        </div>
      </div>

      {{-- Tambahkan data dosen lain di sini dengan pola yang sama --}}
    </div>
  </div>
</div>
@endsection
