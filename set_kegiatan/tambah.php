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
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-3 p-1 bg-white shadow-lg box-area" style="border: 3px solid #14274E !important;">
            <form action="" method="post" enctype="multipart/form-data">

                <h1 class="m-5 text-bold" style="color: #14274E;">Tambah Kegiatan</h1>

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