<?php
    include "../layout/header.php";
    include "../koneksi.php"; 

    if (isset($_GET['hapus'])) {
        $nama_karyawan = $_GET['hapus'];
        $query = "DELETE FROM karyawan WHERE nama_karyawan='$nama_karyawan'";
        $hapus = mysqli_query($koneksi, $query);

        if($hapus){
            echo "<script>alert('Data berhasil dihapus!');</script>";
            echo "<script>location='data_karyawan.php';</script>";
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card"> 
                <div class="card-header">
                    Data karyawan
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <a href="tambah_karyawan.php" class="btn btn-primary">Tambah Data </a>
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
                                    <th>id karyawan</th>
                                    <th>nama karyawan</th>
                                    <th>nomor telepon</th>
                                    <th>aksi</th>
                                </tr>
                                <?php
                                    if(isset($_GET['cari'])){ 
                                        $keyword=$_GET['keyword'];                
                                        $query=mysqli_query($koneksi, "SELECT * FROM karyawan where nama_karyawan like '%$keyword%'");
                                    }else{
                                        $query=mysqli_query($koneksi, "SELECT * FROM karyawan");
                                    }

                                    while ($ambil_data=mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $ambil_data['id_karyawan']; ?></td>
                                    <td><a href="detail_karyawan.php?nama_karyawan=<?php echo $ambil_data['nama_karyawan']; ?>" style="text-decoration: none; color:black"><?php echo $ambil_data['nama_karyawan']; ?></a></td>
                                    <td><?php echo $ambil_data['no_telepon']; ?> </td>
                                    <td>
                                        <a href="data_karyawan.php?hapus=<?php echo $ambil_data['nama_karyawan']?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
