<?php

$shippuden = [
    [
        "Nama" => "Naruto",
        "Clan" => "Uzumaki",
        "Desa Asal" => "Konohagakure",
        "Tanggal Lahir" => "10-10-1999"
    ],
    [
        "Nama" => "Sasuke",
        "Clan" => "Uchiha",
        "Desa Asal" => "Konohagakure",
        "Tanggal Lahir" => "23-07-1999"
    ],
    [
        "Nama" => "Gaara",
        "Clan" => "Kazekage",
        "Desa Asal" => "Sunaagakure",
        "Tanggal Lahir" => "19-01-1999"
    ]
];

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
    </style>
</head>
<body>
    <center>
    <h2>NARUTO UNIVERSE</h2>
    <div class="col-5">
        <ul>
    <?php foreach( $shippuden as $spd) : ?>
            <li>
                <a href="latihan2.php?
                Nama=<?= $spd["Nama"]; ?>
                &Clan=<?= $spd["Clan"]; ?>
                &Desa_Asal=<?= $spd["Desa Asal"]; ?>
                &Tanggal_Lahir=<?= $spd["Tanggal Lahir"]; ?>">
                <?= $spd ["Nama"]; ?></a>
            </li>
    <?php endforeach ; ?>
    </ul>
    </div>
    </center>
</body>
</html>