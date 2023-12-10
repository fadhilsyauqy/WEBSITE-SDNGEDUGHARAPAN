<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../admin/login.php");
    exit;
}

require '../admin/functions.php';

//ambil data  di url
$id = $_GET["id"];

$gr = query("SELECT * FROM guru WHERE id = $id")[0];


//cek apakah tombol sudaah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('DATA BERHASIL DIUBAH');
                document.location.href = '../set_guru/index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DIUBAH');
                document.location.href = '../set_guru/index.php';
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

    <title>SD N Gedung Harapan </title>
    <link rel="icon" href="../assets/image/logo.png">
e>

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

                <h1 class="m-5 text-bold" style="color: #14274E;">Ubah Data Guru</h1>


                <input type="hidden" name="id" value="<?= $gr["id"]; ?>">

                <input type="hidden" name="fotolama" value="<?= $gr["foto"]; ?>">

                <div>
                    <label class="form-label" for="nama"> NAMA : </label>
                    <input class="form-control text-white" type="text" name="nama" id="nama" required value="<?= $gr["nama"]; ?>">
                </div>
                <div>
                    <label class="form-label" for="nip"> NIP: </label>
                    <input class="form-control text-white" type="text" name="nip" id="nip" required value="<?= $gr["nip"]; ?>">
                </div>
                <div>
                    <label class="form-label" for="jabatan"> JABATAN: </label>
                    <input class="form-control text-white" type="text" name="jabatan" id="jabatan" required value="<?= $gr["jabatan"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="foto"> FOTO : </label>
                    <div class="mb-2">
                        <img src="../guru/image/<?= $gr['foto']; ?>" width="100" class="border border-dark">
                    </div>
                    <input class="form-control text-white" type="file" name="foto" id="foto">
                </div>
                <div class="d-grid z col-6 mx-auto mb-3">
                    <button class="btn text-white" style="background: #14274E;" type="submit" name="submit">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>