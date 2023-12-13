<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/dropdown.css">

    <title>SD N Gedung Harapan </title>
    <link rel="icon" href="assets/image/logo.png">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo.png" alt="LOGO" height="30" class="d-inline-block align-text-top">
                SD N Gedung Harapan
            </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-bold" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Profil Sekolah</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#visimisi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="#profil">Profil Sekolah</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kegiatan.php">Kegiatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="direktori.php">Direktori</a>
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

    <!-- Bg -->
    <div class="masthead min-vh-100 " style="background-image: url(assets/image/bgasli.jpg);">
        <div class="color-overlay d-flex flex-column justify-content-center align-items-center">
            <p id="animateMe" style="font-size: 4vw; ">Selamat Datang</p>
            <p id="animateMe" style="font-size: 1.5vw; color:gold ">di website </p>
            <p id="animateMe" style="font-size: 3vw; ">SD N GEDUNG HARAPAN </p>
        </div>
    </div>

    <!-- akhir bg -->

    <!-- visi misi  -->
    <section id="visimisi" class="min-vh-90  " style="margin-top:15%; margin-bottom: 10%;" > 
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#14274E" fill-opacity="1" d="M0,64L34.3,69.3C68.6,75,137,85,206,85.3C274.3,85,343,75,411,80C480,85,549,107,617,128C685.7,149,754,171,823,149.3C891.4,128,960,64,1029,48C1097.1,32,1166,64,1234,64C1302.9,64,1371,32,1406,16L1440,0L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
        </svg> -->
        <div class="container">
            <div class="row border rounded-3 p-3 m-3 bg-white shadow box-area" style="margin-top: -9rem !important; margin-bottom:-3rem !important">
                <h1 class="text-center mb-5">VISI MISI</h1>
                <h3 class="text-start">Visi</h3>
                <p>
                    Terwujudnya perserta didik yang berakhlak mulia, cerdas, terampil berprestasi dan sadar lingkungan berdasarkan iman dan taqwa
                </p>
                <h3>Misi</h3>
                <ol class="ms-4" type="I">
                    <li>Menciptakan sekolah yang bernuansa religius</li>
                    <li>Menciptakan lingkungan sekolah yang bersih, sejuk, indah dan nyaman</li>
                    <li>Meningkatkan kedisiplinan seluruh komponen sekolah</li>
                    <li>Mewujudkan kerjasama yang harmonis, baik di dalam maupun di luar sekolah</li>
                    <li>Meningkatkan kompetensi siswa agar mampu bersaing untuk melanjutkan ke jenjang pendidikan yang lebih tinggi</li>
                </ol>
            </div>
        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#14274E" fill-opacity="1" d="M0,128L24,128C48,128,96,128,144,117.3C192,107,240,85,288,80C336,75,384,85,432,85.3C480,85,528,75,576,90.7C624,107,672,149,720,149.3C768,149,816,107,864,101.3C912,96,960,128,1008,160C1056,192,1104,224,1152,234.7C1200,245,1248,235,1296,213.3C1344,192,1392,160,1416,144L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z" style="margin-bottom: -1000px !important;"></path>
        </svg> -->
    </section>
    <!-- akhir visi misi -->


    <!-- profil -->
    <section id="profil" style="background-color: #14274E;" class="min-vh-100 " >
        <div class="container p-5">
            <div class="row border rounded-3 bg-white p-3 shadow box-area">
                <h1 class="text-center m-4">Profil Sekolah</h1>
                <div class="col-md-6">
                    <img src="assets/image/profil.jpg" class="img-thumbnail bg-dark mb-3 rounded " alt="sekolah" style="max-width: 100%;">
                </div>
                <div class="col-md-6 ">

                    <p>
                        <b>SDN Gedung Harapan</b> , sebuah lembaga pendidikan dasar yang berdedikasi, bertekad untuk memberikan pengajaran berkualitas tinggi sambil mendorong setiap siswa agar meraih puncak potensi mereka. Terletak di Desa Gedung Harapan, Gedung Harapan, Kecamatan Jati Agung, Kabupaten Lampung Selatan, Provinsi Lampung, sekolah ini tidak hanya menawarkan tempat belajar, namun juga menciptakan lingkungan yang aman, nyaman, dan penuh inspirasi untuk siswa-siswanya.
                    </p>

                    Komitmen untuk kualitas terwujud melalui penggunaan Kurikulum 2013 dan Kurikulum Merdeka yang disarankan pemerintah sebagai pedoman pendidikan. Dengan status akreditasi grade B dan nilai 86 dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah pada tahun 2021, SDN Gedung Harapan terus berupaya menjaga standar kualitas pendidikan yang tinggi.
                    </p>
                </div>
                <p>
                    Proses penerimaan siswa baru (PPDB) serta informasi terkait biaya masuk dan uang muka pendaftaran dapat diperoleh dengan menghubungi sekolah melalui email di gedungharapans@gmail.com.
                </p>
                <p>
                    Fasilitas yang disediakan meliputi akses internet dengan layanan Telkom Speedy, sumber listrik dari PLN, dan 6 ruang kelas yang mendukung proses belajar mengajar. Terdapat juga 1 perpustakaan yang memfasilitasi akses literasi bagi siswa. Meskipun belum memiliki laboratorium IPA, laboratorium bahasa, laboratorium komputer, dan laboratorium IPS, SDN Gedung Harapan tetap memberikan pendidikan yang optimal dengan sarana yang tersedia.
                </p>
                <p>
                    Sarana sanitasi juga diperhatikan dengan adanya 2 toilet untuk guru dan 2 toilet untuk siswa, menunjukkan perhatian terhadap kesejahteraan dan kebersihan lingkungan belajar.
                </p>
                <p>
                    SDN Gedung Harapan berkomitmen untuk terus memberikan pendidikan yang bermutu serta membentuk lingkungan belajar yang mendukung pertumbuhan dan perkembangan optimal setiap siswanya.
                </p>
            </div>
        </div>
    </section>
    <!-- akhir profi -->

    <!-- AKhir Jumbotron -->


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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js'></script>
    <script type="module" src="assets/script/text.js"></script>


</body>

</html>