<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: ../admin/login.php");
    exit;
}


require '../admin/functions.php';

$id = $_GET["id"];

if(hapus_kgt($id) > 0){
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../set_kegiatan/index.php'
    </script>
    ";
}else {
    echo "
    <script>
        alert('DATA GAGAL DIHAPUS');
        document.location.href = '../set_kegiatan/index.php'
    </script>
    ";
}


?>