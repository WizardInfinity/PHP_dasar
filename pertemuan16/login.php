<?php
session_start();

if ( isset ($_SESSION["login"]) ){
    header("Location:index.php");
    exit;
}

require 'function.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email'");

    //cek email 
    if (mysqli_num_rows($result) === 1) {

        //cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session 
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>LOGIN</h1>
        <?php if(isset($error)) :?>
            <p style="color:red; font-style:italic;">Email / Password Salah!</p>
        <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>