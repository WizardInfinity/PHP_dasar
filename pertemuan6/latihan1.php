<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .kotak{
        width: 100px;
        height: 100px;
        background-color: cyan;
        text-align: center;
        line-height: 100px;
        margin: 5px;
        float: left;
        transition: 1s;
    }
    .kotak:hover{
        transform: rotate(360deg);
    }
    .clear{
        clear: both;
    }
</style>
<body>
    
    <?php
    $numbers = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    ?>
<!-- perulangan bersarang foreach -->
    <?php foreach ( $numbers as $number) : ?>
        <?php foreach ( $number as $angka) : ?>
            <div class="kotak"><?= $angka  ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>