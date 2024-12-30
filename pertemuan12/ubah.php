<?php
require 'function.php';

//ambil data di URL
$id = $_GET["id"];

//query data berdasarkan id
$spd = query("Select * FROM narutoshippuden WHERE id = $id")[0];

//cek apakah tombol sudah di tekan atau belum
if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script> 
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Karakter</title>
</head>

<body>
    <h1>Ubah Data Karakter</h1>

    <form action="" method="post">
        <ul>
            <input type="hidden"  name="id"  value="<?= $spd["id"] ?>">
            <li>
                <label for="foto">Foto</label>
                <input type="text" name="foto" id="foto" value="<?= $spd["foto"] ?>">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $spd["nama"] ?>">
            </li>
            <li>
                <label for="clan">Clan</label>
                <input type="text" name="clan" id="clan" value="<?= $spd["clan"] ?>">
            </li>
            <li>
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender" value="<?= $spd["gender"] ?>">
            </li>
            <li>
                <label for="asal">Asal</label>
                <input type="text" name="asal" id="asal" value="<?= $spd["asal"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>

</html>