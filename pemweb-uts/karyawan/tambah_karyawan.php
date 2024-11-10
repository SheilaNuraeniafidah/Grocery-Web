<?php
    include "../layout/header.php";
    include "../koneksi.php";

    if (isset($_POST['submit'])) {
        $nama_karyawan = $_POST['nama_karyawan'];
        $no_telepon = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        // Debugging
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        
        $query = "INSERT INTO karyawan (nama_karyawan,no_telepon,alamat,password) 
                  VALUES ('$nama_karyawan', '$no_telepon','$alamat', '$password')";

        // Eksekusi query dan cek apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil ditambahkan!');</script>";
            echo "<script>location='data_karyawan.php';</script>";
        } else {
            // Tambahkan pesan error dari database
            echo "<script>alert('Gagal menambah data: " . mysqli_error($koneksi) . "');</script>";
        }
    }
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card">
                <div class="card-header">
                    Tambah Data karyawan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">nama karyawan</label>
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
                                <input type="submit" class="btn btn-primary mt-3" values="simpan" name="submit">
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
