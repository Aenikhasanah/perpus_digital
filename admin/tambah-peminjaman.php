<h5>Halaman Tambah Data Peminjaman.</h5>
<a href="?url=peminjaman" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-data-peminjaman">
    <div class="form-group mb-2">
        <label>User</label>
        <select type="number" name="UserID" class="form-control" required>
            <option value="">Pilih Siswa</option>
            <?php 
            include '../koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE level='peminjam'");
            while ($data = mysqli_fetch_array($sql)){
            ?>

            <option value="<?= $data['UserID'];?>"><?= $data['NamaLengkap'];?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Buku</label>
        <select type="number" name="BukuID" class="form-control" required>
            <option value="">Pilih Buku</option>
            <?php 
            include '../koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT * FROM buku");
            while ($data = mysqli_fetch_array($sql)){
            ?>

            <option value="<?= $data['BukuID'];?>"><?= $data['Judul'];?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Tanggal Peminjaman</label>
        <input type="date" name="TanggalPeminjaman" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Tanggal Pengembalian</label>
        <input type="date" name="TanggalPengembalian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>