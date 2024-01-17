<h5>Halaman Data Kategori.</h5>
<a href="?url=tambah-kategori" class="btn btn-primary">Tambah Kategori</a>
<?php
include '../koneksi.php';
$query_user = mysqli_query($koneksi,"SELECT * FROM kategoribuku");
$row_kategoribuku = mysqli_num_rows($query_user);
?>
<h5 class="m-b-2 text-right btn btn-info" style="margin-bottom: -3px;">Jumlah Kategori : <?=$row_kategoribuku; ?> </h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>NamaKategori</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM kategoribuku ORDER BY KategoriID DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['NamaKategori']?></td>
        <td>
            <a href="?url=edit-kategori&KategoriID=<?= $data['KategoriID'] ?>" class='btn btn-warning'>EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah Anda Ingin Menghapus Data')"
         href="?url=hapus-kategori&KategoriID=<?= $data['KategoriID'] ?>" class='btn btn-danger' >HAPUS</a>
        </td>
    </tr>
    <?php } ?>

</table>