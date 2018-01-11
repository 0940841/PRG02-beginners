<?php
$error = '';
// is er op submit geklikt?
if(isset($_POST['submit'])) {
    // data uit het formulier ophalen
    $albumName = $_POST['albumName'];

    if(empty($albumName)) {
        $error = 'album name cannot be empty';
    }
    else
    {

        // data naar db versturen
        $query = "INSERT INTO albums (name) 
              VALUES (
                '$albumName')";
        // echo $query;
        mysqli_query($db, $query);

        // db afsluiten
        mysqli_close($db);

        // terugsturen naar index.php
        header('Location: index.php');
        exit;
        // bevestiging dat het gelukt.
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new album</title>
</head>
<body>
    <form action="" method="post">

        Naam: <input type="text" name="albumName" value="<?php if(isset($albumName)) { echo $albumName; } ?>"/>
        <input type="submit" name="submit" value="Opslaan"/>
        <span class="error"><?= $error ?></span>
    </form>
</body>
</html>
















