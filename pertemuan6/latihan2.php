<!-- array Asosiatif -->
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
        "Desa Asal" => "Sunagakure",
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
    <title>Latihan PHP</title>
</head>
<body>
    <h1> Naruto Universe </h1>
    <?php foreach( $shippuden as $spd ) : ?> 
    <ul>
        <li>Nama : <?= $spd["Nama"]; ?></li>
        <li>Clan : <?= $spd["Clan"]; ?></li>
        <li>Desa Asal : <?= $spd["Desa Asal"]; ?></li>
        <li>Tanggal Lahir : <?= $spd["Tanggal Lahir"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>