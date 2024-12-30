<?php
//pertemuan 2
//sintaks php

//standar output
//echo, print
//print_r
//var_dump

//penulisan sintaks php
//1.php didalam html
//2.html didalam php

//variabel dan tipe data
//variabel
//tidak boleh diawalo dengan angka, tapi boleh mengandung angka
$nama = "Habieb". "<br>";
echo "Hai, nama saya $nama";

//operator aritmatika
// + - / * %
$a = 20;
$b = 10;
echo "a = $a". "<br>";
echo "b = $b". "<br>";
echo "a + b = " . $a + $b. "<br>";
echo "a - b = " . $a - $b . "<br>";
echo "a / b = " . $a / $b . "<br>";
echo "a * b = " . $a * $b . "<br>";
echo "a % b = " . $a % $b . "<br>";

//penggabungan string / concatenation / concat
$nama_depan = "Habieb";
$nama_belakang = "Anugrah";
$nama_lengkap = $nama_depan . " " . $nama_belakang ;
echo $nama_lengkap . "<br>" ;

//operator penugasan
//=, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 2;
echo $x . "<br>";

//operator perbandingan
//<, >, <=, >=, ==, !=
var_dump(1 == "1") ;
echo "<br>";

//operator identitas
// ===, !===
var_dump(1 === "1");
echo "<br>";

//operator logika
// &&, ||, !
$y = 10;
var_dump($y < 20 && $y % 2 == 0);
?>