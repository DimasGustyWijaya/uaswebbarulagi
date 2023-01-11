<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/raihanadzuhri/assets/css/style01.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>PRINTING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body onload="print()">
    <div class="container">
        <center>
            <h3 style="margin-top : 30px;">Pegawai</h3>
            <hr>
        </center>
        <table id="ready" class="table" style="width: 100%;" table-bordered="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nomor ID</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('../function/koneksi.php');
                $get_master_list = mysqli_query($koneksi, " SELECT * from pegawai");
                while($row = mysqli_fetch_array($get_master_list)){
                ?>

                <tr>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['noid']?></td>
                    <td><?php echo $row['nohp']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['alamat']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>