<?php
    include "../layout/headerkaryawan.php";
    include "../koneksi.php"; 

    if (isset($_GET['hapus'])) {
        $nama_barang = $_GET['hapus'];
        $query = "DELETE FROM barang WHERE nama_barang='$nama_barang'";
        $hapus = mysqli_query($koneksi, $query);

        if($hapus){
            echo "<script>alert('Data berhasil dihapus!');</script>";
            echo "<script>location='data_barang.php';</script>";
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card"> 
                <div class="card-header">
                    Data barang
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <a href="tambah_barang.php" class="btn btn-primary">Tambah Data </a>
                        </div>
                        <div class="col">
                            <form class="form-inline float-right d-flex" method="get">
                                <input type="text" class="form-control" name="keyword">
                                <input type="submit" class="btn btn-primary ml-2" value="Kirim" name="cari" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>id barang</th>
                                    <th>barang</th>
                                    <th>jumlah</th>
                                    <th>aksi</th>
                                </tr>
                                <?php
                                    if(isset($_GET['cari'])){ 
                                        $keyword=$_GET['keyword'];                
                                        $query=mysqli_query($koneksi, "SELECT * FROM barang where nama_barang like '%$keyword%'");
                                    }else{
                                        $query=mysqli_query($koneksi, "SELECT * FROM barang");
                                    }

                                    $no=1;
                                    while ($ambil_data=mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $ambil_data['id_barang']; ?></td>
                                    <td><a href="detail_barang.php?nama_barang=<?php echo $ambil_data['nama_barang']; ?>" style="text-decoration: none; color:black"><?php echo $ambil_data['nama_barang']; ?></a></td>
                                    <td><?php echo $ambil_data['jumlah_barang']; ?> </td>
                                    <td>
                                        <a href="data_barang.php?hapus=<?php echo $ambil_data['nama_barang']?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                 </tr>
                                <?php
                                    }
                                ?>
                            </table>
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
