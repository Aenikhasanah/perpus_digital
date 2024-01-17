<?php
$UserID = $_GET['UserID'];
include '../koneksi.php';
$sql = "SELECT * FROM user WHERE UserID='$UserID'";
$query = mysqli_query($koneksi, $sql);
$data= mysqli_fetch_array($query);
?>
<h5>Halaman Edit Data User.</h5>
<a href="?url=user" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-edit-user&UserID=<?= $UserID; ?>">
    <div class="form-group mb-2">
        <label>UserID</label>
        <input value="<?= $data ['UserID']?>" readonly type="text" name="UserID" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Username</label>
        <input value="<?= $data ['Username']?>" type="text" name="Username" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input value="<?= $data ['Password']?>" type="text" name="Password" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input value="<?= $data ['Email']?>" type="text" name="Email" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>NamaLengkap</label>
        <input value="<?= $data ['NamaLengkap']?>" type="text" name="NamaLengkap" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <input value="<?= $data ['Alamat']?>" type="text" name="Alamat" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Level</label>
        <input value="<?= $data ['Level']?>" type="text" name="Level" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>