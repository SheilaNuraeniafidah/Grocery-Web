<?php
    include "../layout/headerkaryawan.php";
    include "../koneksi.php"; 

    if (isset($_GET['nama_barang'])) {
        $nama_barang = $_GET['nama_barang'];
        $query = "SELECT * FROM barang WHERE nama_barang = '$nama_barang'"; 
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $barang = mysqli_fetch_assoc($result);
        } else {
            echo "Data barang tidak ditemukan!";
            exit();
        }
    } else {
        echo "Nama barang tidak diberikan!";
        exit();
    }
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card">
                <div class="card-header">
                    Detail barang
                </div>
                <div class="card-body">
                    <h2>Detail barang</h2>
                    <p><strong>nama barang : </strong> <?php echo $barang['nama_barang']; ?></p>
                    <p><strong>jumlah :</strong> <?php echo $barang['jumlah_barang']; ?></p>
                    <a href="edit_barang.php" class="btn btn-warning">Edit</a>                               
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "../layout/footer.html";
?>
