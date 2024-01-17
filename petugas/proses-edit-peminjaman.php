<?php

$PeminjamanID = $_GET['PeminjamanID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = 'dikembalikan';

include '../koneksi.php';
$sql = "UPDATE peminjaman SET TanggalPeminjaman='$TanggalPeminjaman', TanggalPengembalian='$TanggalPengembalian', 
StatusPeminjaman='$StatusPeminjaman' WHERE PeminjamanID='$PeminjamanID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=peminjaman");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=peminjaman');</script>";
}
