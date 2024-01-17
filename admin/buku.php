<h5>Halaman Data Buku.</h5>
<a href="?url=tambah-buku" class="btn btn-primary">Tambah Buku</a>
<?php
include '../koneksi.php';
$query_user = mysqli_query($koneksi,"SELECT * FROM buku");
$row_buku = mysqli_num_rows($query_user);
?>
<h5 class="m-b-2 text-right btn btn-info" style="margin-bottom: -3px;">Jumlah Buku : <?=$row_buku; ?> </h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Judul</td>
        <td>Penulis</td>
        <td>Penerbit</td>
        <td>Tahun Terbit</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM buku ORDER BY BukuID DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['Judul']?></td>
        <td><?= $data['Penulis']?></td>
        <td><?= $data['Penerbit']?></td>
        <td><?= $data['TahunTerbit']?></td>
        <td>
            <a href="?url=edit-buku&BukuID=<?= $data['BukuID'] ?>" class='btn btn-warning'>EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah Anda Ingin Menghapus Data')"
         href="?url=hapus-buku&BukuID=<?= $data['BukuID'] ?>" class='btn btn-danger' >HAPUS</a>
        </td>
    </tr>
    <?php } ?>

</table>