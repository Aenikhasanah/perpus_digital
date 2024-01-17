<h5> Halaman Tambah Data Kelas.</h5>
<a href="?url=buku" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-buku">
    <div class="form-group mb-2">
        <label>Judul</label>
        <input type="text" name="Judul" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Penulis</label>
        <input type="text" name="Penulis" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Penerbit</label>
        <input type="text" name="Penerbit" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Tahun Terbit</label>
        <input type="text" name="TahunTerbit" maxlength="" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>