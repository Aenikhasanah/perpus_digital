<h5> Halaman Tambah Data Peminjaman.</h5>
<a href="?url=peminjaman" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-peminjaman">
    <div class="form-group mb-2">
        <label>User ID</label>
        <input type="text" name="UserID" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Buku ID</label>
        <input type="text" name="BukuID" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>TanggalPeminjaman</label>
        <input type="date" name="TanggalPeminjaman" maxlength="" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Tanggal Pengembalian</label>
        <input type="date" name="TanggalPengembalian" maxlength="" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>