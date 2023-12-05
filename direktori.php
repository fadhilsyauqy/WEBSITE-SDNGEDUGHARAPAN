<?php
require 'admin/functions.php';
$guru = query("SELECT * FROM guru");


//tombol cari ditekan
if (isset($_POST["cari"])) {
    $guru = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/tbsiswa.css">
    <link rel="stylesheet" href="./style/dropdown.css">

    <style>
        .card-text {
            list-style-type: none;
        }
    </style>

    <title>Direktori </title>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/logo.png" alt="LOGO" height="30" class="d-inline-block align-text-top">
                SD N Gedung Harapan
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  text-bold" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php#visimisi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="index.php#profil">Profil Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="direktori.php">Direktori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hubungi.php">Hubungi Kami</a>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="admin/login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container mt-3 min-vh-100">

        <section>
            <div class="container">
                <div class="row">
                    <h1 class="col-md-6 text-start">Daftar Guru </h1>
                    <div class="col-md-6 text-end ">
                        <form action="" method="post" class="row mb-3 " role="search" style="width: 80% !important;">
                            <input class=" col form-control me-2 " type="search" name="keyword" placeholder="Telusuri..." aria-label="Search" autocomplete="off">
                            <button class="col-3 btn btn-outline-success " name="cari" type="submit">Telusuri</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <div class="row mt-3 ">
            <?php foreach ($guru as $row) : ?>
                <div class="col-sm-4 mb-3 mb-sm-0 ">
                    <div class="card mb-3" style="max-width: 6000px; border: 3px solid  #14274E">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img  src="guru/image/<?= $row["foto"];  ?>" class="img-fluid rounded-start" alt="guru">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                                    <p class="card-text ">
                                    <ul class="list-unstyled">
                                        <li><b>NIP : </b><?= $row["nip"]; ?> </li>
                                        <li><b>Jabatan : </b> <?= $row["jabatan"]; ?> </li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="text-white pe-3 ps-1 " style="background-color:rgba(17, 33, 65) ;">
        <div class="containeR  text-md-left">
            <div class="row  text-md-left">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">SD N GEDUNG HARAPAN</h5>
                    <hr class="mb-4">
                    <p>Selamat datang di situs web SD N Gedung Harapan! Melalui situs ini, kami bertujuan untuk menyediakan informasi dan memfasilitasi komunikasi yang efisien antara warga sekolah, alumni, masyarakat, dan berbagai instansi terkait.
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">USEFUL LINKS</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="index.php" class="text-white" style="text-decoration: none;">HOME</a>
                    </p>
                    <p>
                        <a href="kegiatan.php" class="text-white" style="text-decoration: none;">KEGIATAN</a>
                    </p>
                    <p>
                        <a href="hubungi.php" class="text-white" style="text-decoration: none;">HUBUNGI KAMI</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">CONTACT US</h5>
                    <hr class="mb-4">
                    <p>
                        Gedung Harapan, Kec. Jati Agung
                        Kab.Lampung Selatan
                    </p>
                    <p><strong>Phone : </strong>+6285658773240</p>
                    <p><strong>Postal code : </strong>34761</p>
                    <p><strong>Email : </strong>sdngedungharapan@gmail.com</p>
                </div>

                <div class="text-center " style="background-color: #14274E;">
                    <hr class="mb-3">
                    <div class="row d-flex justify-content-center">
                        <div>
                            <p>
                                Copyright &copy; 2023 <b>SD N Gedung Harapan</b> . All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>