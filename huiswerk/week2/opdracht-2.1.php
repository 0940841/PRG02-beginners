<?php
//$today

//$lastWeek

/**
 * Calculate difference & convert to days
 *
 * @param int $firstDate Timestamp in seconds
 * @param int $lastDate  Timestamp in seconds
 * @return float
 */
function getDifferenceBetweenDates($firstDate, $lastDate)
{

}

/**
 * Retrieve nights till your next Birthday
 *
 * @param int $birthday Timestamp in seconds
 * @return float
 */
function getNightsTillBirthday($birthday)
{

}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Opdracht 2.1</title>
	</head>
	<body >
        <section>
            <h1>Dates</h1>

            <div>Datum vandaag: <?= $today; ?></div>
            <div>Datum vorige week: <?= $lastWeek; ?></div>
            <div>Verschil tussen dagen: <?= getDifferenceBetweenDates( ); ?></div>
            <div>Nachtjes tot verjaardag: <?= getNightsTillBirthday(); ?></div>
        </section>
	</body>
</html>










