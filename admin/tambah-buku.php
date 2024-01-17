<h5>Halaman Tambah Data Buku.</h5>
<a href="?url=buku" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-data-buku">
    <div class="form-group mb-2">
        <label>Judul</label>
        <input type="text" name="Judul" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Penulis</label>
        <input type="text" name="Penulis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Penerbit</label>
        <input type="text" name="Penerbit" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Tahun Terbit</label>
        <input type="text" name="TahunTerbit" class="form-control" required>
    </div>
         <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>