 @extends('layout.master')

@section('title', 'Tambah Mahasiswa')

@section('content')
<main class="app-main" style="background-color:rgb(159, 226, 255);">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Tambah Mahasiswa Baru</h1>

        <form action="{{ url('/mhs') }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Mahasiswa">
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan NPM">
            </div>

            <div class="mb-3">
                <label for="program" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="program" placeholder="Contoh: Teknik Informatika (S1)">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
</main>
@endsection
