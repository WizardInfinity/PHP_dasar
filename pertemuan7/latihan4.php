<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if ( isset ($_POST["submit"]) ) : ?>
    <h2>SELAMAT DATANG, <?= $_POST ["nama"] ?> !</h2>
    <?php endif; ?>
</body>
</html>