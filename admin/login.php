<?php
session_start();

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;




            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

    <!-- Bootsrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../style/login.css">


    <title>SD N Gedung Harapan </title>
    <link rel="icon" href="../assets/image/logo.png">

</head>

<body>


    <?php if (isset($error)) : ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                Username atau Password Salah!!
            </div>
        </div>
    <?php endif; ?>

    
    <!-- main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- login contianer -->
        <div class="row border rounded-3 p-1 bg-white shadow-lg box-area">
            <!-- left box -->
            <div class="col-md-6 rounded-start  d-flex justify-content-center align-items-center flex-column left-box " style="background: #14274E;">
                <p class="fs-2 text-md-center pt-4 text-white " style="font-weight:700">W E L C O M E</p>
                <div class="featured-img pb-2">
                    <img src="../assets/image/login.png" class="image-fluid" style="width: 25rem;">
                </div>
                <a href="../index.php" class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </a>
            </div>

            <!-- right box -->
            <div class="col-md-6 p-5 right-box">
                <form action="" method="post" class="row align-items-center">
                    <div class="featured-img d-flex align-items-center justify-content-center pt-4">
                        <img src="../assets/image/login2.png" class="image-fluid" style="width: 10rem;">
                    </div>
                    <p class="fs-2 text-md-center pt-2 " style="color: #14274E; font-weight:700;">L O G I N</p>
                    <div class="mb-3">
                        <label for="username" class="form-label ">Username</label>
                        <input type="text" name="username" id="username" class="form-control rounded-4 text-white" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" name="password" id="password" class="form-control rounded-4 text-white" placeholder="Password">
                    </div>
                    <div class="d-grid z col-6 mx-auto mb-3">
                        <button class="btn text-white" style="background: #14274E;" type="submit" name="login">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>

