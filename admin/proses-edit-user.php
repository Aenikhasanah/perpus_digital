<?php
$UserID = $_GET['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

include '../koneksi.php';
$sql = "UPDATE user SET UserID='$UserID', Username='$Username', Password='$Password', Email='$Email', NamaLengkap='$NamaLengkap', Alamat='$Alamat', Level='$Level' WHERE UserID='$UserID'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=user");
}else{
    echo"<script>alert ('Maaf Data Tidak Tersimpan'); window.location.assign('?url=user');</script>";
}