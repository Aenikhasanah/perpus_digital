<h5>Halaman Data User.</h5>
<a href="?url=tambah-user" class="btn btn-primary">Tambah User</a>
<?php
include '../koneksi.php';
$query_user = mysqli_query($koneksi,"SELECT * FROM user");
$row_user = mysqli_num_rows($query_user);
?>
<h5 class="m-b-2 text-right btn btn-info" style="margin-bottom: -3px;">Jumlah User : <?=$row_user; ?> </h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>
        <td>NamaLengkap</td>
        <td>Alamat</td>
        <td>Level</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM user ORDER BY UserID DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['Username']?></td>
        <td><?= $data['Password']?></td>
        <td><?= $data['Email']?></td>
        <td><?= $data['NamaLengkap']?></td>
        <td><?= $data['Alamat']?></td>
        <td><?= $data['Level']?></td>
        <td>
            <a href="?url=edit-user&UserID=<?= $data['UserID'] ?>" class='btn btn-warning'>EDIT</a>
        </td>
        <td>
            <a onclick="return confirm('Apakah Anda Ingin Menghapus Data')"
         href="?url=hapus-user&UserID=<?= $data['UserID'] ?>" class='btn btn-danger' >HAPUS</a>
        </td>
    </tr>
    <?php } ?>

</table>