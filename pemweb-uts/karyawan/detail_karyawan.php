<?php
    include "../layout/header.php";
    include "../koneksi.php"; 

    if (isset($_GET['nama_karyawan'])) {
        $nama_karyawan= $_GET['nama_karyawan'];
        $query = "SELECT * FROM karyawan WHERE nama_karyawan = '$nama_karyawan'"; 
        $result = mysqli_query($koneksi, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $karyawan = mysqli_fetch_assoc($result);
        } else {
            echo "Data tidak ditemukan!";
            exit();
        }
    } else {
        echo "Nama karyawan tidak diberikan!";
        exit();
    }
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 585px;">
            <div class="card">
                <div class="card-header">
                    Detail karyawan
                </div>
                <div class="card-body">
                    <h2>Detail karyawan</h2>
                    <p><strong>nama karyawan: </strong> <?php echo $karyawan['nama_karyawan']; ?></p>
                    <p><strong>no telepon :</strong> <?php echo $karyawan['no_telepon']; ?></p>
                    <p><strong>alamat :</strong> <?php echo $karyawan['alamat']; ?></p>
                    <a href="edit_karyawan.php" class="btn btn-warning">Edit</a>                               
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "../layout/footer.html";
?>
