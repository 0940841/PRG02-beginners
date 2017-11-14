<?php
//Get the number for the current hour (24 clock)
$hour =


//Decide the text depending on current time (we will also use this as ID for CSS)
if ($hour )
{
    $period = 'nacht';
}
elseif ($hour )
{
    $period = 'morgen';
}
elseif ($hour )
{
    $period = 'middag';
}
else
{
    $period = 'navond';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welkom!</title>
</head>
<body>
<h1>Welkom!</h1>

<div>
    <?= 'Goede' . $period; ?>
</div>
</body>
</html>
