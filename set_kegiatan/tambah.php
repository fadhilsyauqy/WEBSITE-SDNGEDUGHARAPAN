<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}


require '../admin/functions.php';


//cek apakah tombol sudaah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah_kgt($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAH');
                document.location.href = '../set_kegiatan/index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DITAMBAH');
                document.location.href = '../set_kegiatan/index.php';
            </script>
        ";
    }
}

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

    <title>Tambah Data Siswa</title>
    <style>
        label {
            font-weight: 600;
        }

        .form-control,
        .form-select {
            background: #14274E !important;
            color: #fff
        }
    </style>

</head>

<body>

    <!-- card  -->
    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
            <div class="card m-3 bg-success bg-gradient" style="max-width:14rem; ">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title " style="font-size: 15px;">JUMLAH GURU</h5>
                            <h1 class="text-end mt-5" style="font-size: 70px;"><?= $TOTALguru ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-3 bg-info bg-gradient" style="max-width:14rem; ">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title " style="font-size: 15px;">KEGIATAN</h5>
                            <h1 class="text-end mt-5" style="font-size: 70px;"><?= $JMLHkgt ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card m-3 bg-warning bg-gradient" style="max-width: 14rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 15px;">TAMBAH DATA GURU</h5>
                        </div>
                    </div>
                </div>
                <a href="../set_guru/tambah.php" class="dropdowm-item ms-1 text-decoration-none text-end" style="align-self: flex-end; margin-bottom: 10px; margin-right: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-plus text-dark" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                </a>
            </div>

            <div class="card m-3 bg-danger bg-gradient" style="max-width: 14rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div class="row g-0">
                    <div class="col-md-18">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 15px;">TAMBAH DATA KEGIATAN</h5>
                        </div>
                    </div>
                </div>
                <a href="../set_kegiatan/tambah.php" class="dropdowm-item ms-1 text-decoration-none text-end" style="align-self: flex-end; margin-bottom: 10px; margin-right: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-calendar-plus text-dark" viewBox="0 0 16 16">
                        <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7" />
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- akhir card -->

    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row border rounded-3 ps-5 pe-5  bg-white shadow-lg box-area" style="border: 3px solid #14274E !important;">
            <form action="" method="post" enctype="multipart/form-data">

                <h1 class="m-5 text-bold" style="color: #14274E;">KEGIATAN</h1>

                <div class="mb-3">
                    <label class="form-label" for="judul"> JUDUL : </label>
                    <input class="form-control text-white" type="text" name="judul" id="judul" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="deskripsi"> DESKRIPSI : </label>
                    <textarea class="form-control text-white" name="deskripsi" id="deskripsi" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="gambar"> GAMBAR : </label>
                    <input class="form-control text-white" type="file" name="gambar" id="gambar">
                </div>
                <div class="d-grid z col-6 mx-auto mb-3">
                    <button class="btn text-white" style="background: #14274E;" type="submit" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>