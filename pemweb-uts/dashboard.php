<?php
    session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem | Minimarket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <style>
        body {
            background-color: plum;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.1); /* Warna putih transparan */
            backdrop-filter: blur(10px); /* Efek blur kaca buram */
            z-index: 1000; /* Agar navbar berada di atas */
            position: sticky;
            top: 0;
        }

        .navbar a, .navbar-brand {
            color: #fff !important;
        }

        .navbar .dropdown-menu {
            background-color: rgba(255, 255, 255, 0.9); 
        }

        .navbar .dropdown-menu a {
            color: #000 !important;
        }

        .content {
            flex: 1;
        }

        footer {
            background-color: transparent;
            color: #fff;
            padding: 10px 0;
            position: relative;
            z-index: 100;
            margin-top: auto; /* Agar footer berada di bawah secara fleksibel */
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand">Sistem Minimarket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Content -->
    <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-4 mb-5">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Selamat Datang Karyawan</h1>
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
                                <a href="barang_karyawan/data_barang.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Karyawan</h5>
                                <p class="card-text">Detail data karyawan</p>
                                <a href="karyawan/data_karyawanonly.php" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Cards Section -->
            </div>
        </div>
        <!-- Akhir Content -->

<?php
    include "layout/footer.html"
?>