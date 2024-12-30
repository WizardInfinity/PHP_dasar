<?php
//cek apakah tidak ada data di $_GET
if ( !isset ($_GET["Nama"] ) || 
    !isset ($_GET["Clan"]) || 
    !isset ($_GET["Desa_Asal"]) || 
    !isset ($_GET["Tanggal_Lahir"]) ){
    //redirect
    header("Location: latihan1.php");
    exit;
    //akan langsung di kick dan di kembalikan ke tampilan awal
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a{
            text-decoration:none;
        }
        .col-5{
            width: 10%;
            text-align:start;
        }
        .center{
            text-align:center;

        }
    </style>
</head>
<body>
    <center>
    <h2>NARUTO UNIVERSE</h2>
    <div class="col-5">
    <ul>
        <li><?= $_GET["Nama"]; ?></li>
        <li><?= $_GET["Clan"]; ?></li>
        <li><?= $_GET["Desa_Asal"]; ?></li>
        <li><?= $_GET["Tanggal_Lahir"]; ?></li>
    </ul>
    </div>
    
    <a href="latihan1.php">KEMBALI</a>
    </center>
</body>
</html>