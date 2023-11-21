<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

//ambil data  di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$murid = query("SELECT * FROM siswa WHERE id = $id")[0];


//cek apakah tombol sudaah ditekan atau belum
if(isset($_POST["submit"]) ){

    //cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0){
        echo "
            <script>
                alert('DATA BERHASIL DIUBAH');
                document.location.href = 'edit.php'
            </script>
        ";
    }else{
        echo "
            <script>
                alert('DATA GAGAL DIUBAH');
                document.location.href = 'edit.php';
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
    <title>ubah Data Siswa</title>
</head>
<body>
    <h1>ubah Data Siswa</h1>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $murid["id"]; ?>">

        <label for="nama"> NAMA : </label>
        <input type="text" name="nama" id="nama" required value="<?= $murid["nama"]; ?>">
        <br><br>
        <label for="nisn"> NISN : </label>
        <input type="number" name="nisn" id="nisn" required value="<?= $murid["nisn"]; ?>">
        <br><br>
        <label for="gender"> GENDER: </label>
        <input type="text" name="gender" id="gender" required value="<?= $murid["gender"]; ?>">
        <br><br>
        <label for="alamat"> ALAMAT : </label>
        <input type="textarea" name="alamat" id="alamat" required value="<?= $murid["alamat"]; ?>">
        <br><br>
        <button type="submit" name="submit">Ubah Data</button>

            
    </form>
</body>
</html>