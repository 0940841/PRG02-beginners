<?php
session_start();

if(!isset($_SESSION['email'])) {
    // redirect to login page
    header('Location: login.php');
    exit;
}

?>
<!doctype html>
<html>
<head>
    <title>Secure page</title>
    <meta charset="utf-8"/>

</head>
<body>
    <h1>Secure page</h1>
    <p>Welkom, <?= $_SESSION['email'] ?></p>
    <ul>
        <li><a href="index.php">Terug naar index</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>