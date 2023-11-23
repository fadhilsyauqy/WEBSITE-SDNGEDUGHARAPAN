<?php
//koneksi ke database
$db = mysqli_connect("localhost","root","","dbSekolah");


function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [] ;
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $db;

    //ambil data dari tiap elemen
    $nama= htmlspecialchars($data["nama"]) ;
    $nisn= htmlspecialchars( $data["nisn"]);
    $gender= htmlspecialchars($data["gender"]) ;
    $alamat= htmlspecialchars($data["alamat"]) ;

    //query insert data
    $query = "INSERT INTO siswa VALUES ('','$nama','$nisn','$gender','$alamat') ";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($db);

}


function ubah($data){
    global $db;
    //ambil data dari tiap elemen
    $id =  $data["id"];
    $nama= htmlspecialchars($data["nama"]) ;
    $nisn= htmlspecialchars( $data["nisn"]);
    $gender= htmlspecialchars($data["gender"]) ;
    $alamat= htmlspecialchars($data["alamat"]) ;

    //query insert data
    $query = "UPDATE siswa SET
                nama = '$nama',
                nisn = '$nisn',
                gender = '$gender',
                alamat = '$alamat'
            WHERE id = $id
            ";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function cari($keyword) {
    $query = "SELECT * FROM siswa
                WHERE
            nama LIKE '%$keyword%' OR
            nisn LIKE '%$keyword%' OR
            gender LIKE '%$keyword%'OR
            alamat LIKE '%$keyword%'
        ";
    return query($query);
}

function regis($data){
    global $db;

    $username = strtolower(stripslashes( $data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    //cek username sudah ada tau tidak
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo"<script>
                alert('Username sudah terdaftar !!');
            </script>";
        return false;
    }



    //cek konnfirmasi password
    if ( $password !== $password2 ){
        echo"<script>
                alert('konfirmasi password tidak cocok');
            </script>";
        return false;
    }

    //enkripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($db, "INSERT INTO user VALUES ('','$username','$password')" );

    return mysqli_affected_rows($db);

}


// KEGIATAN
function tambah_kgt($data){
    global $db;

    //ambil data dari tiap elemen
    $nama= htmlspecialchars($data["nama"]) ;
    $nisn= htmlspecialchars( $data["nisn"]);
    $gender= htmlspecialchars($data["gender"]) ;
    $alamat= htmlspecialchars($data["alamat"]) ;

    //query insert data
    $query = "INSERT INTO siswa VALUES ('','$nama','$nisn','$gender','$alamat') ";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus_kgt($id){
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($db);

}


function ubah_kgt($data){
    global $db;
    //ambil data dari tiap elemen
    $id =  $data["id"];
    $nama= htmlspecialchars($data["nama"]) ;
    $nisn= htmlspecialchars( $data["nisn"]);
    $gender= htmlspecialchars($data["gender"]) ;
    $alamat= htmlspecialchars($data["alamat"]) ;

    //query insert data
    $query = "UPDATE siswa SET
                nama = '$nama',
                nisn = '$nisn',
                gender = '$gender',
                alamat = '$alamat'
            WHERE id = $id
            ";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}



?>