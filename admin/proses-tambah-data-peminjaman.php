<?php
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = 'dipinjam';

include '../koneksi.php';
$sql = "INSERT INTO peminjaman(UserID,BukuID,TanggalPeminjaman,TanggalPengembalian,StatusPeminjaman) VALUES('$UserID','$BukuID','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=peminjaman");
}else{
    echo"<script>alert ('Maaf Data Tidak Tersimpan'); window.location.assign('?url=peminjaman');</script>";
}