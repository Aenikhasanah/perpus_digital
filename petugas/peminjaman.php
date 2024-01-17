<h5>Halaman Tambah Data Peminjaman Buku.</h5>
<a href="?url=tambah-peminjaman" class="btn btn-primary"> Tambah Peminjaman </a>
<?php
include '../koneksi.php';
$query_user = mysqli_query($koneksi,"SELECT * FROM peminjaman");
$row_UserID = mysqli_num_rows($query_user);
?>
<h5 class="m-b-2 text-right btn btn-info" style="margin-bottom: -3px;">Jumlah Peminjaman : <?=$row_UserID; ?> </h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>User ID </td>
        <td> Buku ID </td>
        <td>Tanggal Peminjaman</td>
        <td>Tanggal Pengembalian</td>
        <td>Status Peminjaman</td>
        <td>Aksi</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM peminjaman ORDER BY PeminjamanID DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['UserID'] ?></td>
            <td><?= $data['BukuID'] ?></td>
            <td><?= $data['TanggalPeminjaman'] ?></td>
            <td><?= $data['TanggalPengembalian'] ?></td>
            <td><?= $data['StatusPeminjaman'] ?></td>

            <td>
                <a href="?url=edit-peminjaman&PeminjamanID=<?= $data['PeminjamanID'] ?>" class='btn btn-warning'>KEMBALIKAN</a>
                <a onclick="return confirm('Apakah Anda Yakin ingin Menghapus Data')"
                 href="?url=hapus-peminjaman&PeminjamanID=<?= $data['PeminjamanID'] ?>" class='btn btn-danger'>HAPUS</a>
            </td>
        </tr>
        <?php } ?>   
</table>
