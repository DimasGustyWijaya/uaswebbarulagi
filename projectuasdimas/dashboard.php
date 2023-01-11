<?php
require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;
if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tambah Pegawai</title>
</head>

<body>
    <nav class="" style="background-color: crimson;  height: 50px;">
        <div class="" >
            <div class="" id="">
                <ul class="" style="display: flex; justify-content: row; list-style-type: none; font-family: 'Share Tech Mono', monospace;">
                    <li class="">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . 'dashboard.php?page=create' ?>" style="color: white;">Tambah Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . 'process/process_logout.php' ?> "style="color: white; ">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL . 'process/process_print.php' ?> "style="color: white; ">Print</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <div class="sub-content mt-5">
                <?php
                $filename = "page/$page.php";

                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "404";
                }

                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>