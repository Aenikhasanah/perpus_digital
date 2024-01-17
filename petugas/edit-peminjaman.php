<?php
$PeminjamanID = $_GET['PeminjamanID'];
include'../koneksi.php';
$sql = "SELECT * FROM peminjaman INNER JOIN user ON peminjaman.UserID=user.UserID INNER JOIN buku ON peminjaman.BukuID=buku.BukuID 
WHERE PeminjamanID='$PeminjamanID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5> Halaman Edit .</h5>
<a href="?url=peminjaman" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-peminjaman&PeminjamanID=<?= $PeminjamanID; ?>">
    <div class="form-group mb-2">
        <label>Nama Lengkap</label>
        <input value="<?= $data['NamaLengkap'] ?>" type="text" name="NamaLengkap" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Judul</label>
        <input value="<?= $data['Judul'] ?>" type="text" name="Judul" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>TanggalPeminjaman</label>
        <input value="<?= $data['TanggalPeminjaman'] ?>" type="text" name="TanggalPeminjaman" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>TanggalPengembalian</label>
        <input value="<?= $data['TanggalPengembalian'] ?>" type="text" name="TanggalPengembalian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>