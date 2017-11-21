<?php
//Get the number for the current hour (24 clock)
$hours = date('G');


//Decide the text depending on current time.
// 00, 01, 02, 03, 04, 05
if ($hours < 6)
{
    $period = 'nacht';
}
// 06, 07, 08, 09, 10 ,11
elseif ($hours < 12)
{
    $period = 'morgen';
}
elseif ($hour < 18)
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
