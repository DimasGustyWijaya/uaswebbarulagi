<?php

require_once("function/helper.php");
    require_once('function/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css'?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
</head>

<body  style="background-image: url('assets/bgb.jpg'); background-size: cover;">

    <div class="content">
        <div class="card-login" style="background:transparent;">
            <div class="card-main" >
                <h3 style="text-align: center; font-family: 'Metal Mania', cursive; font-size:50px; margin-bottom: 0px; color: white;">PLEASE LOGIN!</h3>
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>" style="color: crimson; font-family: 'Share Tech Mono', monospace;">
                        <label class="form-label" style="color: white; ">Username</label>
                        <input type="username" name="username" class="form-input" style="border-color: crimson;">
                        <label class="form-label" style="color: white; ">Password</label>
                        <input type="password" name="password" class="form-input" style="border-color: crimson;">
                        <button type="submit" class="btn btn-login" style="font-family: 'Share Tech Mono', monospace; background-color: crimson;">Login</button>
                    </form>
                    <p style="text-align: center; color: white; font-family: 'Share Tech Mono', monospace;">Belum punya akun?<span><a href="<?= BASE_URL . 'register.php'?>"> Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>