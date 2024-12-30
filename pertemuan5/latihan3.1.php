<!-- array numerik -->
<?php 
$shippuden = [
    ["Naruto", "Uzumaki", "Konohagakure", "10101999"],
    ["Sasuke", "Uchiha", "Konohagakure", "23071999"],
    ["Gaara", "Kazekage", "Sunagakure", "19011999"]
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
        <li>Nama : <?= $spd[0]; ?></li>
        <li>Clan : <?= $spd[1]; ?></li>
        <li>Desa Asal : <?= $spd[2]; ?></li>
        <li>Tanggal Lahir : <?= $spd[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>