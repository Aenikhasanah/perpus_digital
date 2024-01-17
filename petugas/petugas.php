<?php
session_start();

if(empty($_SESSION['UserID'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
if($_SESSION['Level']!='petugas'){
    echo"<script>
    alert('Maaf Anda Bukan Petugas');
    window.location.assign('../index.php');
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Aplikasi Perpustakaan</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
       
    <h3>Aplikasi Perpustakaan.</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>Petugas</b> Aplikasi Perpustakaan.
        <b>
        <small>
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //
                </script>
            </small>
        </b>
    </div>
    <a href="petugas.php" class="btn btn-primary">User Petugas</a>
    <a href="petugas.php?url=buku" class="btn btn-primary">Data Buku</a>
    <a href="petugas.php?url=kategori" class="btn btn-primary">Kategori</a>
    <a href="petugas.php?url=peminjaman" class="btn btn-primary">Peminjaman</a>
    <a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
    <a href="petugas.php?url=logout" class="btn btn-primary">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- isi web -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Petugas.</h4>";
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
