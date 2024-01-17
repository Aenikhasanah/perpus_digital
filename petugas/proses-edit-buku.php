<?php

$BukuID = $_GET['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

include '../koneksi.php';
$sql = "UPDATE buku SET BukuID='$BukuID', Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', 
TahunTerbit='$TahunTerbit' WHERE BukuID='$BukuID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=buku");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=buku');</script>";
}
