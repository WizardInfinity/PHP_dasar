<!-- array numerik -->
<?php 
$shippuden = ["Naruto", "Uzumaki", "Konohagakure", "10101999"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1> Naruto Universe </h1>
    <!-- Cara Pertama -->   
    <ul> 
    <?php foreach( $shippuden as $spd ) : ?> 
        <li><?= $spd; ?></li>
    <?php endforeach; ?>
    </ul>

    <!-- Cara Kedua -->
    <ul>
        <li><?= $shippuden[0]; ?></li>
        <li><?= $shippuden[1]; ?></li>
        <li><?= $shippuden[2]; ?></li>
        <li><?= $shippuden[3]; ?></li>
    </ul>
</body>
</html>