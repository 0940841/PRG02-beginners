<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 1 - Datum en tijd</title>
</head>
<body>
<h1>Datum en tijd</h1>

<!--Get the current date from the PHP function Date-->
<div><?= 'Het is vandaag ' . date('d F Y'); ?></div>
<div><?= 'Het is vandaag ' . date('j/n/Y'); ?></div>

<div>
    <?php
    echo 'Het is nu '.date('G').' uur en '.date('i');
    if (date('i') == 1) {
        echo ' minuut.';
    }
    else {
        echo ' minuten.';
    }
    ?>
</div>
</body>
</html>








