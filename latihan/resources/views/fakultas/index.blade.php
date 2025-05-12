@extends('layout.master')

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Fakultas Universitas MDP</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Fakultas</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="small-box text-bg-primary">
          <div class="inner">
            <h3>Ilmu Komputer dan Rekayasa</h3>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 5 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M4 4h16v2H4V4zm0 4h10v2H4V8zm0 4h16v2H4v-2zm0 4h10v2H4v-2z"></path>
          </svg>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"></a>
        </div>
      </div>
      
      <div class="col-lg-6 col-12">
        <div class="small-box text-bg-success">
          <div class="inner">
            <h3>Ekonomi dan Bisnis</h3>
          </div>
          <svg class="small-box-icon" fill="currentColor" viewBox="0 5 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M3 17h2v-7H3v7zm4 0h2V7H7v10zm4 0h2v-4h-2v4zm4 0h2V9h-2v8zm4 0h2v-2h-2v2z"></path>
          </svg>
          <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection