<?php
//Fill in your own birthday
$birthday = "0510";

//List of constellations per date range
$constellations = [
    [
        "startDate" => "0121",
        "endDate" => "0220",
        "name" => "Waterman"
    ],
    [
        "startDate" => "0220",
        "endDate" => "0321",
        "name" => "Vissen"
    ],
    [
        "startDate" => "0321",
        "endDate" => "0421",
        "name" => "Ram"
    ],
    [
        "startDate" => "0421",
        "endDate" => "0522",
        "name" => "Stier"
    ],
    [
        "startDate" => "0522",
        "endDate" => "0622",
        "name" => "Tweeling"
    ],
    [
        "startDate" => "0622",
        "endDate" => "0724",
        "name" => "Kreeft"
    ],
    [
        "startDate" => "0724",
        "endDate" => "0824",
        "name" => "Leeuw"
    ],
    [
        "startDate" => "0824",
        "endDate" => "0924",
        "name" => "Maagd"
    ],
    [
        "startDate" => "0924",
        "endDate" => "1024",
        "name" => "Weegschaal"
    ],
    [
        "startDate" => "1024",
        "endDate" => "1123",
        "name" => "Schorpioen"
    ],
    [
        "startDate" => "1123",
        "endDate" => "1222",
        "name" => "Boogschutter"
    ]
//    ,
//    [
//        "startDate" => "1222",
//        "endDate" => "0121",
//        "name" => "Steenbok"
//    ]
];

/**
 * Retrieve constellation for given birthday
 *
 * @param $birthday
 * @param $constellations
 * @return string
 */
function getConstellationForBirthday($birthday, $constellations)
{
    
}

//Call the function to retrieve your own constellation
$myConstellation = getConstellationForBirthday($birthday, $constellations);
?>
<!doctype html>
<html>
<head>
    <title>Mijn Sterrenbeeld</title>
    <meta charset="utf-8"/>
</head>
<body>
Mijn sterrenbeeld is: <?= $myConstellation; ?>
</body>
</html>
