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

    // $id = htmlspecialchars($data["id"]);
    $foto = htmlspecialchars($data["foto"]);
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

function hapus($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM narutoshippuden WHERE id = $id ");

    return mysqli_affected_rows($connect);
}

function ubah( $data ){
    global $connect;

    $id =  ( $data ["id"] );
    $foto = htmlspecialchars ( $data ["foto"] );
    $nama = htmlspecialchars ( $data ["nama"] );
    $clan = htmlspecialchars ( $data ["clan"] );
    $gender = htmlspecialchars ( $data ["gender"] );
    $asal = htmlspecialchars ( $data ["asal"] );

    $query = "UPDATE narutoshippuden SET
                 foto = '$foto',
                 nama = '$nama',
                 clan = '$clan',
                 gender = '$gender',
                 asal = '$asal'
              WHERE id = $id
                 ";

mysqli_query ($connect, $query);
return mysqli_affected_rows($connect);

}