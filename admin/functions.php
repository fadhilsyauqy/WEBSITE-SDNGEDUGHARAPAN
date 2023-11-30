<?php
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "dbSekolah");


function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $db;

    //ambil data dari tiap elemen
    $nama = htmlspecialchars($data["nama"]);
    $nip = htmlspecialchars($data["nip"]);
    $jabatan = htmlspecialchars($data["jabatan"]);

    //upload gambar
    $gambar = upload_gambarGuru();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO guru VALUES ('','$nama','$nip','$jabatan','$gambar') ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload_gambarGuru()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek gambar
    if ($error === 4) {
        echo "<script>
                alert('Pilih Gambar Terlebih Dahulu');
            </script>";
        return false;
    }

    // cek gambar atau tidak

    $exstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $exstensiGambar = explode('.', $namaFile);
    $exstensiGambar = strtolower(end($exstensiGambar));

    if (!in_array($exstensiGambar, $exstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    //cek ukuran file
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    //siap upload
    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $exstensiGambar;



    move_uploaded_file($tmpName, '../guru/image/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM guru WHERE id = $id");
    return mysqli_affected_rows($db);
}


function ubah($data)
{
    global $db;
    //ambil data dari tiap elemen
    $id =  $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nip = htmlspecialchars($data["nip"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    //cek pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload_gambarGuru();
    }



    //query insert data
    $query = "UPDATE guru SET
                nama = '$nama',
                nip = '$nip',
                jabatan = '$jabatan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function cari($keyword)
{
    $query = "SELECT * FROM guru
                WHERE
            nama LIKE '%$keyword%' OR
            nip LIKE '%$keyword%' OR
            jabatan LIKE '%$keyword%'OR
            gambar LIKE '%$keyword%'
        ";
    return query($query);
}


//login
function regis($data)
{
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    //cek username sudah ada tau tidak
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar !!');
            </script>";
        return false;
    }



    //cek konnfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak cocok');
            </script>";
        return false;
    }

    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($db, "INSERT INTO user VALUES ('','$username','$password')");

    return mysqli_affected_rows($db);
}


// KEGIATAN
function tambah_kgt($data)
{
    global $db;

    //ambil data dari tiap elemen
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tautan = htmlspecialchars($data["tautan"]);

    //upload gambar
    $gambar = upload_gambar();
    if (!$gambar) {
        return false;
    }

    //upload file
    $tautan = upload_file();
    if (!$tautan) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO kegiatan VALUES ('','$judul','$deskripsi','$tautan','$gambar') ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload_gambar()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek gambar
    if ($error === 4) {
        echo "<script>
                alert('Pilih Gambar Terlebih Dahulu');
            </script>";
        return false;
    }

    // cek gambar atau tidak

    $exstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $exstensiGambar = explode('.', $namaFile);
    $exstensiGambar = strtolower(end($exstensiGambar));

    if (!in_array($exstensiGambar, $exstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    //cek ukuran file
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    //siap upload
    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $exstensiGambar;



    move_uploaded_file($tmpName, '../brt_kgt/image/' . $namaFileBaru);

    return $namaFileBaru;
}


function upload_file()
{

    $namaFile = $_FILES['tautan']['name'];
    $ukuranFile = $_FILES['tautan']['size'];
    $error = $_FILES['tautan']['error'];
    $tmpName = $_FILES['tautan']['tmp_name'];

    //cek gambar
    if ($error === 4) {
        echo "<script>
                alert('Pilih File Terlebih Dahulu');
            </script>";
        return false;
    }

    // cek gambar atau tidak

    $exstensiTautanValid = ['html', 'php'];
    $exstensiTautan = explode('.', $namaFile);
    $exstensiTautan = strtolower(end($exstensiTautan));

    if (!in_array($exstensiTautan, $exstensiTautanValid)) {
        echo "<script>
                alert('Yang anda upload bukan Tautan');
            </script>";
        return false;
    }

    //cek ukuran file
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Ukuran Tautan terlalu besar');
            </script>";
        return false;
    }

    //siap upload
    //generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $exstensiTautan;



    move_uploaded_file($tmpName, '../brt_kgt/tautan/' . $namaFileBaru);

    return $namaFileBaru;
}


function hapus_kgt($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM kegiatan WHERE id = $id");
    return mysqli_affected_rows($db);
}


function ubah_kgt($data)
{
    global $db;
    //ambil data dari tiap elemen
    $id =  $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $tautanlama = htmlspecialchars($data["tautanlama"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    //cek pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload_gambar();
    }

    //cek pilih tautan baru
    if ($_FILES['tautan']['error'] === 4) {
        $tautan = $tautanlama;
    } else {
        $tautan = upload_file();
    }

    //query insert data
    $query = "UPDATE kegiatan SET
                judul = '$judul',
                deskripsi = '$deskripsi',
                tautan = '$tautan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
