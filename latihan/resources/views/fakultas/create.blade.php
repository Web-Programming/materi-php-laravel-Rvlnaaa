<form action="{{ route('fakultas.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Fakultas</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label>URL Gambar</label>
        <input type="url" name="gambar" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
</form>
