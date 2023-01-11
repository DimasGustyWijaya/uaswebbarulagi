<?php

require_once('../function/helper.php');
require_once('../function/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

var_dump(mysqli_num_rows($query));


if (mysqli_num_rows($query) != 0) {
    $row = mysqli_fetch_assoc($query);

    session_start();
    $_SESSION['id'] = $row['id'];
    header("location: " . BASE_URL . 'dashboard.php?page=home');
}else{
    header("location: " . BASE_URL);
}