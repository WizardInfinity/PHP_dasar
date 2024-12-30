<?php 
$numbers = [2 ,4 , 13, 9, 21, 22, 2 ,4 , 13, 9, 21, 22];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<style>
    .biru_muda{
        width: 50px;
        height: 50px;
        background-color: cyan;
        text-align: center;
        line-height: 50px;
        float: left;
        margin: 5px;
    }
    .biru{
        width: 50px;
        height: 50px;
        background-color: blue;
        text-align: center;
        line-height: 50px;
        float: left;
        margin: 5px;
        color: white;
    }
    .clear {
        clear: both;
    }
</style>
<body>

    <!-- menggunakan perulangan for -->
    <h2>Dengan Menggunakan For </h2>
    <?php for( $i = 0; $i < count($numbers); $i++) { ?>
    <div class="biru_muda"><?php echo $numbers [$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- menggunakan perulangan foreach -->
    <h2>Dengan Menggunakan Foreach </h2>
    <?php foreach( $numbers as $number ) { ?>
        <div class="biru"><?php echo $number ; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- menggunakan perulangan foreach gaya penulisan templating-->
    <h2>Dengan Menggunakan Foreach dengan gaya penulisan Templating</h2>
    <?php foreach( $numbers as $number ) : ?>
        <div class="biru"><?= $number ; ?></div>
    <?php endforeach; ?>
</body>
</html>