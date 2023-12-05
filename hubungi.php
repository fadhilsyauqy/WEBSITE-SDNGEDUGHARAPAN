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

        @media(min-width: 991px) {
            .dropdown:hover>.dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        .col-md-4 svg {
            color: #264A92 !important;
        }
    </style>


    <title>Hubungi</title>
</head>

<body>

    <!-- nav -->
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
                            <li><a class="dropdown-item" href="index.php#visimisi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="index.php#profil">Profil Sekolah</a></li>
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
    <div class="container-fluid  p-3 min-vh-100">
        <!-- login contianer -->
        <div class="row border rounded-3 p-3 bg-white shadow-lg box-area">
            <h1 class="text-center mb-3">Hubungi Kami</h1>
            <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus reprehenderit dolorem illum quo illo fuga possimus! Error eius facere sit iste? Sunt fugiat placeat magnam expedita aspernatur numquam ipsa nobis. Repellat tenetur voluptatibus doloremque commodi laboriosam at quisquam aut, exercitationem deleniti, repellendus voluptatem? Vel adipisci nobis in numquam magnam omnis.</p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5160855909085!2d105.35129237600034!3d-5.337885353479062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c3db5d33439d%3A0xdcef00172b75399d!2sSDN%20Gedung%20harapan!5e0!3m2!1sid!2sid!4v1700786241446!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    <h3 class="mt-3">ALAMAT</h3>
                    <address>
                        Gedung Harapan, Kec. Jati Agung
                        <br>Kab.Lampung Selatan
                    </address>
                </div>
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <h3 class="mt-3">TELEPON</h3>
                    <p>+6285658773240</p>
                </div>
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg>
                    <h3 class="mt-3">EMAIL</h3>
                    <p>sdngedungharapan@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Isi -->
    <footer class="text-white pe-3 ps-1" style="background-color:rgba(17, 33, 65) ;">
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