<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

$gr = query("SELECT COUNT(*) as TOTAL FROM guru");
$TOTALguru = $gr[0]["TOTAL"];

$kgt = query("SELECT COUNT(*) as JMLH FROM kegiatan");
$JMLHkgt = $kgt[0]["JMLH"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../style/edtsiswa.css">

    <title>SD N Gedung Harapan </title>
    <link rel="icon" href="../image/logo.png">

</head>

<body>

    <nav class="navbar bg-body-tertiary sticky-top shadow">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <h3>Halaman Utama</h3>

            <div>
                <!-- agar h3 ditengah -->
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h2>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-1">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../admin/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../set_guru/index.php">Data Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../set_kegiatan/index.php">Kegiatan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-auto-close="outside" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Settings
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="../admin/register.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg> <span>Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../admin/logout.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-left " viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg>
                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <!-- card  -->
    <div class="container mt-5 min-vh-80" style="margin-top: 15% !important;">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="card m-3 bg-success bg-gradient" style="max-width:18rem; ">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title " style="font-size: 30px;">JUMLAH GURU</h5>
                            <h1 class="text-end mt-5" style="font-size: 100px;"><?= $TOTALguru ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-3 bg-info bg-gradient" style="max-width:18rem; ">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title " style="font-size: 30px;">KEGIATAN</h5>
                            <h1 class="text-end mt-5" style="font-size: 100px;"><?= $JMLHkgt ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-3 bg-warning bg-gradient" style="max-width: 18rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px;">TAMBAH DATA GURU</h5>
                        </div>
                    </div>
                </div>
                <a href="../set_guru/tambah.php" class="dropdowm-item ms-1 text-decoration-none text-end" style="align-self: flex-end; margin-bottom: 10px; margin-right: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="130" height="130" fill="currentColor" class="bi bi-person-plus text-dark" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                </a>
            </div>

            <div class="card m-3 bg-danger bg-gradient" style="max-width: 18rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 30px;">TAMBAH DATA KEGIATAN</h5>
                        </div>
                    </div>
                </div>
                <a href="../set_kegiatan/tambah.php" class="dropdowm-item ms-1 text-decoration-none text-end" style="align-self: flex-end; margin-bottom: 10px; margin-right: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-calendar-plus text-dark" viewBox="0 0 16 16">
                        <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>
                </a>
            </div>

            <!-- akhir card -->


            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        </div>

</body>

</html>