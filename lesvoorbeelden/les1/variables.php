<?php
// In PHP variables begin with a $ sign.
$number;        // declaration
$number = 10;   // initialization

?>
<!doctype html>
<html>
	<head>
		<title>Variables</title>
		<meta name="description" content="width=device-width, user-scalable=no" />
		<meta charset="utf-8" />
	</head>
	<body >
        <section>
            <!-- echo single variable within HTML -->
            <p><?= $number ?></p>
            <p>
                <?php
                // in a code block it is not allowed to use <?=
                $number++;
                if($number == 11) {
                    echo 'The number is now 11.';
                }
                ?>
            </p>
        </section>
	</body>
</html>