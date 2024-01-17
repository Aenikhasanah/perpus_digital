<?php
$KategoriID = $_GET['KategoriID'];

include '../koneksi.php';
$sql = " DELETE FROM kategoribuku WHERE KategoriID='$KategoriID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=kategori");
}else{
    echo"<script>alert ('Maaf Data Tidak Terhapus'); window.location.assign('?url=kategori');</script>";
}