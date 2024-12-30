<?php
function salam($waktu){
    return "Selamat $waktu ";
}
function nama($nama, $kelas){
    return "Nama saya $nama, Kelas $kelas";
}
function belajar($mapel, $materi){
    return "Saya sedang belajar $mapel dengan materi $materi";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1> <?= salam ("Pagi"); ?></h1>
    <h2> <?= nama ("Habieb Anugrah", "XII RPL"); ?></h2>
    <h2> <?= belajar ("PWPB", "Function PHP"); ?></h2>
</body>
</html>