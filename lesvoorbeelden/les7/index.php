<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>Index</title>
    <meta charset="utf-8"/>

</head>
<body>
    <h1>Index.php</h1>
    <ul>
    <?php if(isset($_SESSION['email'])) { ?>
        <li><a href="secure.php">Secure page</a></li>
        <li><a href="logout.php">Logout</a></li>
    <?php } else { ?>
        <li><a href="register.php">Register</a></li>
        <li><a href="secure.php"><small>Stiekem toch naar secure (je bent niet ingelogd)</small></a></li>
    <?php } ?>
    </ul>
</body>
</html>