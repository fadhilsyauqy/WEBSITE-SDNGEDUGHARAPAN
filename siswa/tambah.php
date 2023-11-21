<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}


require 'functions.php';


//cek apakah tombol sudaah ditekan atau belum
if(isset($_POST["submit"]) ){

    //cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('DATA BERHASIL DITAMBAH');
                document.location.href = 'edit.php'
            </script>
        ";
    }else{
        echo "
            <script>
                alert('DATA GAGAL DITAMBAH');
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
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">

        <label for="nama"> NAMA : </label>
        <input type="text" name="nama" id="nama" required >
        <br><br>
        <label for="nisn"> NISN : </label>
        <input type="number" name="nisn" id="nisn" required>
        <br><br>
        <label for="gender"> KELAMIN : </label>
        <input type="text" name="gender" id="gender" required>
        <br><br>
        <label for="alamat"> ALAMAT : </label>
        <input type="textarea" name="alamat" id="alamat" required>
        <br><br>
        <button type="submit" name="submit">Tambah Data</button>

            
    

    </form>
</body>
</html>