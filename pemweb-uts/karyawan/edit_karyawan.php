<?php
    include "../layout/header.php";
    include "../koneksi.php";
    if (isset($_POST['edit'])) {
            $nama_karyawan = $_POST['nama_karyawan'];
            $no_telepon= $_POST['no_telepon'];
            $alamat= $_POST['alamat'];
            $password= $_POST['password'];

            $query_update = "UPDATE karyawan SET nama_karyawan='$nama_karyawan', no_telepon='$no_telepon', alamat='$alamat', password='$password' WHERE nama_karyawan='$nama_karyawan'";
            
            if (mysqli_query($koneksi, $query_update)) {
                echo "<script>alert('Data berhasil diedit!');</script>";
                echo "<script>location='data_karyawan.php';</script>";
            } else {
                echo "<script>alert('Gagal mengedit data. Coba lagi.');</script>";
            }
        }
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card">
                <div class="card-header">
                    Edit Data karyawan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Nama karyawan</label>
                                    <input type="text" class="form-control" placeholder="nama karyawan" name="nama_karyawan">
                                </div>
                                <div class="form-group">
                                    <label for="">no telepon</label>
                                    <input type="text" class="form-control" placeholder="no telepon" name="no_telepon">
                                </div>
                                <div class="form-group">
                                    <label for="">alamat</label>
                                    <input type="text" class="form-control" placeholder="alamat" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="">password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                </div>
                                <input type="submit" class="btn btn-primary mt-3" name="edit" value="Simpan Perubahan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "../layout/footer.html";
?>