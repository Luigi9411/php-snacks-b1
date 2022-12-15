<?php 
    $arrbasket = [
        [
            "home" => "Olimpia Milano",
            "guests" => "Cantù",
            "homePoints" => "55",
            "guestPoints" => "60",
        ],
        [
            "home" => "Roma",
            "guests" => "Frosinone",
            "homePoints" => "100",
            "guestPoints" => "40",
        ],
        [
            "home" => "Bari",
            "guests" => "Foggia",
            "homePoints" => "30",
            "guestPoints" => "60",
        ],
        [
            "home" => "Venezia",
            "guests" => "Lecce",
            "homePoints" => "50",
            "guestPoints" => "55",
        ],
        [
            "home" => "Firenze",
            "guests" => "Siena",
            "homePoints" => "100",
            "guestPoints" => "80",
        ],
        [
            "home" => "Spezia",
            "guests" => "Verona",
            "homePoints" => "40",
            "guestPoints" => "100",
        ],
        [
            "home" => "Monza",
            "guests" => "Ternana",
            "homePoints" => "85",
            "guestPoints" => "40",
        ],
        [
            "home" => "Cagliari",
            "guests" => "Bergamo",
            "homePoints" => "90",
            "guestPoints" => "100",
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <h1>Risultati</h1>
    <ul><?php
    for ($i=0; $i < count($arrbasket); $i++) {
        $key = $arrbasket[$i];
        echo "<li>" 
        . $key["home"] .
         ' - ' .
         $key["guests"] .
         ' | ' . 
        $key["homePoints"] . 
         ' - ' .
        $key["guestPoints"] .
        "</li>";
    } ?>
    </ul>
</body>
</html>