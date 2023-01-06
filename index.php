<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?= @$_SESSION['error_login'];
            unset($_SESSION['error_login']); ?>
    <form action="sistem/auth/login.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <button value="admin" name="login">Login</button> -->


    <form action="sistem/voting/voting.php" method="post">
        <input type="text" name="1">
        <input type="text" name="10">
        <input type="text" name="9">
        <input type="text" name="5">
        <input type="text" name="7">
        <button type="submit">Kirim</button>
    </form>
</body>

</html>