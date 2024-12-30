<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'function.php';

$karakter = query("SELECT * FROM narutoshippuden GROUP BY id ASC");

$mpdf = new \Mpdf\Mpdf();

$html = 
'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karakter</title>
    <link rel="stylesheet" href="css/print.css" >
</head>
<body>
    <h1>Karakter</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Clan</th>
                <th>Gender</th>
                <th>Asal</th>
            </tr>';

            $i = 1;
            foreach( $karakter as $row){
                $html .=
                '<tr>
                    <td>'. $i++ .'</td>
                    <td><img src="img/'. $row["foto"] .'" width="150px"></td>
                    <td>'. $row["nama"] .'</td>
                    <td>'. $row["clan"] .'</td>
                    <td>'. $row["gender"] .'</td>
                    <td>'. $row["asal"] .'</td>
                </tr>';
            }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output('karakter_naruto.pdf', \Mpdf\Output\Destination::INLINE);
?>