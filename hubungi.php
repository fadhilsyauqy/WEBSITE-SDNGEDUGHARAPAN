<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            box-sizing: border-box;
        }

        .navbar {
            /* background-color: rgba(242, 247, 250, .5); */
            background-color: #14274E !important;
        }

        @media(max-width: 991px) {
            .nav-item.ms-4 {
                margin-left: 0 !important;
            }
        }
    </style>


    <title>Hubungi</title>
</head>

<body>

    <!-- nav -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                SD N Gedung Harapan
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Profil Sekolah</a>
                    </li> -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="profil.php">Profil Sekolah</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kegiatan.php">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="direktori.php">Direktori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-bold" href="hubungi.php">Hubungi Kami</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Direktori
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="datasiswa.php">Data Siswa</a></li>
                                <li><a class="dropdown-item" href="#">Data Guru</a></li>
                            </ul>
                        </li> -->
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
    <!-- akhir nav -->

    <!-- ISi -->
    <!-- main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- login contianer -->
        <div class="row border rounded-3 p-3 bg-white shadow-lg box-area">
            <h1 class="text-center mb-3">Hubungi Kami</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus reprehenderit dolorem illum quo illo fuga possimus! Error eius facere sit iste? Sunt fugiat placeat magnam expedita aspernatur numquam ipsa nobis. Repellat tenetur voluptatibus doloremque commodi laboriosam at quisquam aut, exercitationem deleniti, repellendus voluptatem? Vel adipisci nobis in numquam magnam omnis.</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5160855909085!2d105.35129237600034!3d-5.337885353479062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c3db5d33439d%3A0xdcef00172b75399d!2sSDN%20Gedung%20harapan!5e0!3m2!1sid!2sid!4v1700786241446!5m2!1sid!2sid" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            
        </div>

    </div>
    <!-- Akhir Isi -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>