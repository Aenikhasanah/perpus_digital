<h5>Halaman Tambah Data User.</h5>
<a href="?url=user" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-data-user">
    <div class="form-group mb-2">
        <label>Username</label>
        <input type="text" name="Username" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input type="password" name="Password" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Email</label>
        <input type="text" name="Email" maxlength="200" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>NamaLengkap</label>
        <input type="text" name="NamaLengkap"  class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Alamat</label>
        <input type="text" name="Alamat"  class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Level</label>
        <input type="enum" name="Level" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>