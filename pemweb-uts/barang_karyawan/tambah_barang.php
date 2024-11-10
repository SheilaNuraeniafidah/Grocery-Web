<?php
    include "../layout/headerkaryawan.php";
    include "../koneksi.php";

    if (isset($_POST['submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah_barang'];

        // Debugging
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        
        $query = "INSERT INTO barang (nama_barang,jumlah_barang) 
                  VALUES ('$nama_barang', '$jumlah')";

        // Eksekusi query dan cek apakah berhasil
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil ditambahkan!');</script>";
            echo "<script>location='data_barang.php';</script>";
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
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                            <div class="form-group">
                                    <label for="">nama barang</label>
                                    <input type="text" class="form-control" placeholder="nama barang" name="nama_barang">
                                </div>
                                <div class="form-group">
                                    <label for="">jumlah</label>
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah_barang">
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
