<?php
usleep(500000);

require '../function.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM narutoshippuden
            WHERE
                nama LIKE '%$keyword%' OR
                clan LIKE '%$keyword%' OR
                gender LIKE '%$keyword' OR
                asal LIKE '%$keyword%' 
            ";
$karakter = query($query);
?>

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
    <?php foreach ($karakter as $row): ?>
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
    <?php endforeach; ?>
</table>