<?php
require 'siswa/functions.php';
$siswa = query("SELECT * FROM siswa");


//tombol cari ditekan
if (isset($_POST["cari"])) {
    $siswa = cari($_POST["keyword"]);
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

    <title>Data Siswa </title>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow" style="background-color: palevioletred;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                SD N Gunung Harapan
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil Sekolah</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle text-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false aria-current=">
                            Data Sekolah
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="datasiswa.php">Data Siswa</a></li>
                            <li><a class="dropdown-item" href="#">Data Guru</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="siswa/login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->



    
    <div class="container mt-3">
        <h1 class="text-start mb-3">Daftar Siswa </h1>

        <form action="" method="post" class="d-flex " role="search">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Telusuri..." aria-label="Search" autocomplete="off">
            <button class="btn btn-success" name="cari" type="submit">Telusuri</button>
        </form>

        <table border="2" class="table table-responsive table-hover shadow rounded-4 mx-auto m-3 rounded-3" >

            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Gender</th>
                <th>Alamat</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($siswa as $row) : ?>
                <tr>
                    <td class="text-center fw-bold "><?= $i; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["nisn"]; ?></td>
                    <td><?= $row["gender"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>

                    </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>