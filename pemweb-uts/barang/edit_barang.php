<?php
    include "../layout/header.php";
    include "../koneksi.php";
    if (isset($_POST['edit'])) {
            $nama_barang = $_POST['nama_barang'];
            $jumlah_barang = $_POST['jumlah_barang'];

            $query_update = "UPDATE barang SET nama_barang='$nama_barang', jumlah_barang='$jumlah_barang' WHERE nama_barang='$nama_barang'";
            
            if (mysqli_query($koneksi, $query_update)) {
                echo "<script>alert('Data berhasil diedit!');</script>";
                echo "<script>location='data_barang.php';</script>";
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
                    Edit Data Barang
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" placeholder="nama barang" name="nama_barang">
                                </div>
                                <div class="form-group">
                                    <label for="">jumlah</label>
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah_barang">
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