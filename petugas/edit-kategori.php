<?php
$KategoriID = $_GET['KategoriID'];
include'../koneksi.php';
$sql = "SELECT * FROM kategoribuku WHERE KategoriID='$KategoriID'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5> Halaman Edit Data Kelas.</h5>
<a href="?url=kategori" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-kategori&KategoriID=<?= $KategoriID; ?>">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['NamaKategori'] ?>" type="text" name="NamaKategori" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>