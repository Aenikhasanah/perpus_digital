<?php
$BukuID = $_GET['BukuID'];
include'../koneksi.php';
$sql = "SELECT * FROM buku WHERE BukuID='$BukuID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5> Halaman Edit Data Buku.</h5>
<a href="?url=buku" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-buku&BukuID=<?= $BukuID; ?>">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['Judul'] ?>" type="text" name="Judul" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['Penulis'] ?>" type="text" name="Penulis" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['Penerbit'] ?>" type="text" name="Penerbit" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['TahunTerbit'] ?>" type="text" name="TahunTerbit" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>