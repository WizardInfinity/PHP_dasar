<?php

//koneksi database
$connect = mysqli_connect("localhost", "root", "", "belajarphp");

//ambil data dari tabel /  query data
function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    global $connect;

    //upload foto
    $foto = upload();
    if (!$foto) {
        return false;
    }


    $nama = htmlspecialchars($data["nama"]);
    $clan = htmlspecialchars($data["clan"]);
    $gender = htmlspecialchars($data["gender"]);
    $asal = htmlspecialchars($data["asal"]);

    $query = "INSERT INTO narutoshippuden
                VALUES
                ('','$foto','$nama', '$clan', '$gender','$asal')
                ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);

}

function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    //cek apakah tidak ada foto yang di upload
    if ($error === 4 ) {
        echo "<script>
                alert('Silahkan Masukkan Foto Terlebih Dahulu!');
                </script>";
        return false;
    }

    //cek apakah yang diupload hanyalah foto/gambar
    $ekstensiFotoValid = ['jpg','jpeg','png'];
    $ekstensiFoto = explode('.', $namaFile);
    $ekstensiFoto = strtolower (end($ekstensiFotoValid));
    if (!in_array ($ekstensiFoto, $ekstensiFotoValid)) {
        echo "<script>
                alert('File Yang Di Izinkan Hanya .jpg/.jpeg/.png!');
                </script>";
        return false;
    }

    //cek jika ukuran foto/gambar lebih dari 2MB
    if( $ukuranFile > 2000000 ){
        echo "<script>
                alert ('File Tidak Boleh Lebih Dari 2 MB!')
                </script>";
            return false;
    }

    //lolos pengecekan, foto/gambar siap diupload
    //generate nama foto/gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFoto;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFile;
}

function hapus($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM narutoshippuden WHERE id = $id ");

    return mysqli_affected_rows($connect);
}

function ubah($data)
{
    global $connect;

    $id = ($data["id"]);

    $fotoLama = htmlspecialchars($data["fotoLama"]);
        //cek apakah user pilih foto/gambar baru atau tidak
        if ( $_FILES ['foto']['error'] === 4)
        {
            $foto = $fotoLama;
        }else{
            $foto = upload();
        }
    $nama = htmlspecialchars($data["nama"]);
    $clan = htmlspecialchars($data["clan"]);
    $gender = htmlspecialchars($data["gender"]);
    $asal = htmlspecialchars($data["asal"]);

    $query = "UPDATE narutoshippuden SET
                 foto = '$foto',
                 nama = '$nama',
                 clan = '$clan',
                 gender = '$gender',
                 asal = '$asal'
              WHERE id = $id
                 ";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);

}

function cari($keyword)
{
    $query = "SELECT * FROM narutoshippuden
                WHERE
                nama LIKE '%$keyword%' OR
                clan LIKE '%$keyword%' OR
                gender LIKE '%$keyword' OR
                asal LIKE '%$keyword%' 
                ";
    return query($query);
}