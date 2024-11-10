<?php
    include "../layout/headerkaryawan.php";
    include "../koneksi.php"; 
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
                                    <th>alamat</th>
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
                                    <td><?php echo $ambil_data['nama_karyawan']; ?></a></td>
                                    <td><?php echo $ambil_data['no_telepon']; ?> </td>
                                    <td><?php echo $ambil_data['alamat']; ?> </td>
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
