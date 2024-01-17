<?php

$KategoriID = $_GET['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

include'../koneksi.php';
$sql = "UPDATE kategoribuku SET NamaKategori='$NamaKategori' WHERE KategoriID='$KategoriID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kategori");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=kategoribuku');</script>";
}
