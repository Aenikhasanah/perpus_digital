<?php
$Username = $_POST['Username'];
$Password = md5($_POST['nim']);

include 'koneksi.php';
$sql = "SELECT * FROM user WHERE Username='$Username' AND Password='$Password'";
$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['UserID'] =$data['UserID'];
    $_SESSION['Email'] = $data['Email'];
    $_SESSION['NamaLengkap'] = $data['NamaLengkap'];
    $_SESSION['Alamat'] = $data['Alamat'];
    $_SESSION['Level'] = $data['Level'];
    if($data['Level']=='admin'){
        header('Location:admin/admin.php');
    }elseif($data['Level']=='peminjam'){
        header('Location:siswa/siswa.php');
    }elseif($data['Level']=='petugas'){
        header('Location:petugas/petugas.php');
    }
}else{
    echo"<script>
    alert('Maaf Login Gagal, Silahkan Ulangi Lagi');
    window.location.assign('index.php');
    </script>";
}
 
 

