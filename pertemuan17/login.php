<?php
session_start();
require 'function.php';

//cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil email berdasarkan id
    $result = mysqli_query($connect, "SELECT email FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan email
    if ($key === hash('sha256', $row['email'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location:index.php");
    exit;
}


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

            //cek remember me
            if (isset($_POST['remember'])) {
                //buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['email']), time() + 60);
            }

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
</head>

<body>
    <h1>LOGIN</h1>
    <?php if (isset($error)): ?>
        <p style="color:red; font-style:italic;">Email / Password Salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="email" style="display: block;">Email :</label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="password" style="display: block;">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="remember">Remember me </label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>