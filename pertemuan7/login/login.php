<?php
$error = '';
// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // Jika benar, redirect ke halaman admin.php
        header("Location: admin.php");
        exit;
    } else {
        // Jika salah, setel pesan kesalahan
        $error = 'Username atau password salah';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN USER!</h2>
    <?php if ( isset( $error) ) : ?>
        <p style="color: red ; font-style: italic;"><?= $error ?></p>
    <?php endif ; ?>
    <form action="login.php" method="post">
        <ul>
            <li>
                <label for="username">USERNAME:</label>
                <input type="text" name="username" id="username" required>
            </li>
            <br>
            <li>
                <label for="password">PASSWORD:</label>
                <input type="password" name="password" id="password" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </ul>
    </form>
</body>
</html>
