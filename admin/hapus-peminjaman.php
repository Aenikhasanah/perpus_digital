<?php
$PeminjamanID = $_GET['PeminjamanID'];

include '../koneksi.php';
$sql = " DELETE FROM peminjaman WHERE PeminjamanID='$PeminjamanID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=peminjaman");
}else{
    echo"<script>alert ('Maaf Data Tidak Terhapus'); window.location.assign('?url=peminjaman');</script>";
}