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


    <title>Visi Misi</title>
</head>

<body>

    <!-- nav -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow">
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
                        <a class="nav-link dropdown-toggle active text-bold" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link" href="hubungi.php">Hubungi Kami</a>
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
            <h1 class="text-center mb-5">VISI MISI</h1>
            <h3 class="text-start">Visi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem aliquam asperiores maxime? Dicta corporis quam, repellendus aspernatur provident ipsa accusamus accusantium non fugit nisi dolorem nesciunt deserunt enim magni, cum voluptatibus. Ullam eligendi molestias sint libero id eveniet quae possimus porro laborum, praesentium saepe? Earum quisquam consectetur, officiis, tempore incidunt commodi rem accusamus maiores animi id delectus! Quisquam fuga, quis fugiat at officiis magnam libero itaque autem atque, hic maiores veniam unde magni iste odit perferendis doloremque asperiores obcaecati. Ullam ducimus consectetur, mollitia voluptas inventore cum vel iure aliquam praesentium suscipit neque hic totam, quod similique facere a est!</p>
            <h3>Misi</h3>
            <ol class="ms-4" type="I">
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, temporibus?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione illo ut pariatur asperiores, veritatis sequi?</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aspernatur velit omnis iure consequatur quae libero cum, corporis aut consequuntur repellat cupiditate praesentium aliquid repellendus.</li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, iusto!</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque cum possimus enim cupiditate porro deleniti soluta ut, numquam et rerum?</li>
            </ol>
        </div>
    </div>
    <!-- Akhir Isi -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>