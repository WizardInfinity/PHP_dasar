<?php

echo date("l,d-M-Y");//hari ini beserta tanggalnya

echo "<br><br><br><br>";

echo time();//detik yang dihitung pada 1 Januari 1970

echo "<br><br><br><br>";

echo date( "l", time ()+172800 );//menghitung hari ini dengan 2 hari kemudian

echo "<br><br><br><br>";

echo date( "l", time ()+60*60*24*100 );//menghitung hari ini dengan 100 hari kemudian yang dihitung oleh komputer

echo "<br><br><br><br>";

//mktime
//membuat sendiri detik
//mktime (0,0,0,0,0,0)
//arti nol diatas sesuai urutan adalah = jam, menit, detik, bulan, tanggal, tahun

echo date ("l", mktime ( 0, 0, 0, 9, 13,2005));//mengetahui hari apa kita di lahirkan sesuai tanggal tahun
?>