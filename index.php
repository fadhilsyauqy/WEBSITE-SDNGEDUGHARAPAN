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

    <title>Home</title>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow">
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
    <div class="masthead" style="background-image: url(image/bgasli.jpg);">
        <div class="color-overlay d-flex flex-column justify-content-center align-items-center">
            <p id="animateMe" style="font-size: 4vw; ">Selamat Datang</p>
            <p id="animateMe" style="font-size: 1.5vw; color:gold ">di website </p>
            <p id="animateMe" style="font-size: 3vw; ">SD N GEDUNG HARAPAN </p>
        </div>
    </div>

    <!-- akhir bg -->

    <section id="visimisi">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#14274E" fill-opacity="1" d="M0,64L34.3,69.3C68.6,75,137,85,206,85.3C274.3,85,343,75,411,80C480,85,549,107,617,128C685.7,149,754,171,823,149.3C891.4,128,960,64,1029,48C1097.1,32,1166,64,1234,64C1302.9,64,1371,32,1406,16L1440,0L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
        </svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#14274E" fill-opacity="1" d="M0,128L24,128C48,128,96,128,144,117.3C192,107,240,85,288,80C336,75,384,85,432,85.3C480,85,528,75,576,90.7C624,107,672,149,720,149.3C768,149,816,107,864,101.3C912,96,960,128,1008,160C1056,192,1104,224,1152,234.7C1200,245,1248,235,1296,213.3C1344,192,1392,160,1416,144L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z" style="margin-bottom: -1000px !important;"></path>
        </svg>
    </section>


    <!-- akhir visi misi -->


    <!-- profil -->
    <section id="profil" style="background-color: #14274E ;">
        <div class="container p-3">
            <div class="row border rounded-3 bg-white p-3  shadow box-area">
                <h1 class="text-center mb-3">Profil Sekolah</h1>
                <img src="image/bg.jpg" class="img-fluid mb-3 rounded" alt="sekolah" style="height: 300px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem aliquam asperiores maxime? Dicta corporis quam, repellendus aspernatur provident ipsa accusamus accusantium non fugit nisi dolorem nesciunt deserunt enim magni, cum voluptatibus. Ullam eligendi molestias sint libero id eveniet quae possimus porro laborum, praesentium saepe? Earum quisquam consectetur, officiis, tempore incidunt commodi rem accusamus maiores animi id delectus! Quisquam fuga, quis fugiat at officiis magnam libero itaque autem atque, hic maiores veniam unde magni iste odit perferendis doloremque asperiores obcaecati. Ullam ducimus consectetur, mollitia voluptas inventore cum vel iure aliquam praesentium suscipit neque hic totam, quod similique facere a est!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium earum perspiciatis fugiat soluta ab. Expedita, perspiciatis sunt! Dolores magni est nisi veniam at, vitae consequuntur cupiditate velit vel. Reprehenderit aliquam aliquid modi vel doloribus, voluptas aspernatur cum, necessitatibus alias, id reiciendis nihil sequi ab esse nemo quod laboriosam beatae maiores cupiditate perferendis iste suscipit ipsa? Exercitationem facilis illo velit iure at doloribus sapiente in officiis delectus cumque voluptatibus suscipit dignissimos ex provident similique voluptatum possimus necessitatibus voluptas iusto, quam ullam cum fugiat tempora. Atque quasi eos tenetur reprehenderit deleniti modi totam explicabo dolorum provident expedita commodi non, doloremque possimus eum voluptatum mollitia eaque praesentium suscipit cumque fugiat quia ex blanditiis et velit! Id adipisci beatae unde iusto et animi non veritatis, voluptatibus consequuntur quidem eveniet pariatur officiis sed qui possimus, facere repudiandae doloribus cumque itaque sunt suscipit fugiat error alias aliquid! Reiciendis incidunt velit qui. Assumenda voluptates eius itaque dolor provident? Blanditiis laboriosam commodi iusto nobis ipsa odio cumque dolorem perspiciatis, voluptatum quo vel esse nihil aliquid laudantium ullam vero odit obcaecati aliquam quibusdam similique. Tempora perspiciatis rem debitis consequatur? Reiciendis praesentium quidem magni quo dolorem veritatis deserunt sapiente temporibus aperiam ea doloremque, at eius incidunt maiores nostrum unde deleniti!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste id aspernatur porro enim laudantium mollitia velit, explicabo deleniti repellendus magni odio quod ducimus similique fugit asperiores reiciendis? Recusandae minus corporis quisquam repellat reprehenderit nam debitis enim error ducimus autem quo ipsum reiciendis tenetur at ad accusamus, quidem omnis soluta sit provident pariatur odio dolores sunt tempora! Voluptate eligendi sint officia. Voluptates sunt similique tenetur nemo possimus, provident nisi adipisci eius iusto officia aspernatur sit doloremque dolorum doloribus animi veniam officiis quasi eum nulla at dolores accusamus laudantium itaque exercitationem. Nesciunt quos nobis quis suscipit adipisci cum officia et unde illum, voluptates aut impedit laborum consectetur? Illum accusamus, quos, cumque quod illo commodi deleniti officia quis deserunt rerum placeat obcaecati culpa quo sed blanditiis inventore a fugit facere reprehenderit sit quasi cupiditate. Odit, libero distinctio maxime, ut nam consequatur explicabo illo non temporibus voluptatum amet? Quam quidem quis ex odit hic?</p>
            </div>
        </div>
    </section>

    <!-- AKhir Jumbotron -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js'></script>
    <script type="module" src="./script/text.js"></script>


</body>

</html>