<?php
session_start();
if(empty($_SESSION['UserID'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
if($_SESSION['Level']!='peminjam'){
    echo"<script>
    alert('Maaf Anda bukan sesi peminjam');
    window.location.assign('../index.php');
    </script>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin -Aplikasi Perpustakaan Digital</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h3>Aplikasi Perpustakaan Digital</h3>
    <div class="alert alert-info">
    Anda Login Sebagai <b>User</b> Aplikasi Perpustakaan Digital.
</div>
    <a href="siswa.php" class="btn btn-primary"> User Peminjam </a>
    <a href="siswa.php?url=user" class="btn btn-primary"> Data User </a>
    <a href="siswa.php?url=peminjaman" class="btn btn-primary"> Peminjaman </a>
    <a href="siswa.php?url=logout" class="btn btn-primary"> Logout </a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web kita -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman User Peminjam.</h4>";
            }else{
                include $file.'.php';
            }
            ?>
        </div>
    </div>

    </div>
   
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>