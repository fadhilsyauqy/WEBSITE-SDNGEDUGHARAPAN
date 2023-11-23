<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}

require '../admin/functions.php';

//ambil data  di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$murid = query("SELECT * FROM siswa WHERE id = $id")[0];


//cek apakah tombol sudaah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubah_kgt($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DIUBAH');
                document.location.href = '../set_kegiatan/index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DIUBAH');
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

    <title>ubah Data Siswa</title>

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

        
        <form action="" method="post">

                <h1 class="m-5 text-bold" style="color: #14274E;">Ubah Data Siswa</h1>
            
                <div>
                    <input type="hidden" name="id" value="<?= $murid["id"]; ?>">
                </div>

                <div>
                    <label class="form-label" for="nama"> NAMA : </label>
                    <input class="form-control" type="text" name="nama" id="nama" required value="<?= $murid["nama"]; ?>">
                </div>
                <div>
                    <label class="form-label" for="nisn"> NISN : </label>
                    <input class="form-control" type="number" name="nisn" id="nisn" required value="<?= $murid["nisn"]; ?>">
                </div>
                <div>
                    <label class="form-label" for="gender"> GENDER: </label>
                    <input class="form-control" type="text" name="gender" id="gender" required value="<?= $murid["gender"]; ?>">
                </div>
                <div>
                    <label class="form-label" for="alamat"> ALAMAT : </label>
                    <input class="form-control" type="textarea" name="alamat" id="alamat" required value="<?= $murid["alamat"]; ?>">
                </div>
                <div>
                    <button type="submit" name="submit">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>