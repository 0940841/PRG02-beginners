<?php
// Dit is de detail pagina van een album
require_once 'includes/database.php';

$id = $_GET['id'];

$query = "SELECT *
          FROM albums
          WHERE id = $id";

$result = mysqli_query($db, $query)
    or die(mysqli_error($db));

$album = mysqli_fetch_assoc($result);

mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <h1><?= $album['name'] ?></h1>
    </section>
</body>
</html>











