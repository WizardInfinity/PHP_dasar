<?php
require 'function.php';
//cek apakah tombol sudah di tekan atau belum
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script> 
                alert('data gagal ditambahkan!');
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
    <title>Tambah Karakter</title>
</head>

<body>
    <h1>Tambah Karakter</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="clan">Clan</label>
                <input type="text" name="clan" id="clan">
            </li>
            <li>
                <label for="gender">Gender</label>
                <input type="text" name="gender" id="gender">
            </li>
            <li>
                <label for="asal">Asal</label>
                <input type="text" name="asal" id="asal">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>