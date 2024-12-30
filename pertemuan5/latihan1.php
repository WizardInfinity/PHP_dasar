<?php

// Penulisan Array
$hari = array ("Senin","Selasa","Rabu");//penulisan array dengan cara yang lama
$bulan = ["Januari","Februari","Maret"];//penulisan array dengan cara yang baru
$arr1 = [123,"PHP",true];//bisa dituliskam dengan tipe data yang berbeda

// Cara menampilkan array
// Dengan menggunakan var_dump() atau dengan print_r() 
/* penulisan ini hanya diperlukan untuk developer atau pada debug. Tidak untuk ditampilkan ke user. Untuk user
bisa menggunakan perulangan (seperti pada file latihan2.php) */
var_dump($hari);
echo "<br><br><br>";
print_r($bulan);
echo "<br><br><br>";
var_dump($arr1);
echo "<br><br><br><br><br>";

// menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo "<font color=blue> $bulan[2] </font>" ;//menampahkan tag html pada php
echo "<br><br><br><br>";

// cara menambahkan elemen baru pada array
var_dump($hari);//sebelum ditambahkan
$hari[] = "kamis";
echo "<br><br>";
var_dump($hari);//sesudah ditambahkan

?>