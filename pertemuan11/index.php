<?php
require 'function.php';

$karakter = query("SELECT * FROM narutoshippuden");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karakter</title>
</head>
<body>
    <h1>Karakter</h1>

    <a href="tambah.php">Tambah Karakter</a><br><br> 
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Clan</th>
            <th>Gender</th>
            <th>Asal</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($karakter as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm ('Yakin ingin Hapus Data?');">Delete</a>
            </td>
            <td><img src="img/<?= $row["foto"]; ?>" width="130px"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["clan"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["asal"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>