<?php
// connectie met db maken
require_once 'includes/database.php';

//print_r($_POST);

// ALS de data verstuurd?
if (isset($_POST['submit']))
{
    // data uit het formulier ophalen
    $albumName = $_POST['albumName'];

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
else
{
    // ANDERS, redirect naar create,php
    header('Location: create.php');
}