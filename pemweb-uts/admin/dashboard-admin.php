<?php
    session_start();
    include "../koneksi.php";
    include "../layout/header.php";
?>

<!-- Content -->
<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mb-5">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-4">Selamat Datang Admin</h1>
                            <p class="lead">Sistem Manajemen MiniMarket</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards Section -->
            <div class="row mt-2 mb-5">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Barang</h5>
                            <p class="card-text">Detail dan manajemen data barang</p>
                            <a href="../barang/data_barang.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Karyawan</h5>
                            <p class="card-text">Detail data karyawan</p>
                            <a href="../karyawan/data_karyawan.php" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Cards Section -->
        </div>
    </div>
    <!-- Akhir Content -->

<?php
    include "../layout/footer.html"
?>