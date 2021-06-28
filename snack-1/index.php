 <!-- ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>

<h1>Snack-1</h1>

<?php 


$matches = [
    [
        "homeTeam" => "Toronto Raptors",
        "guestTeam" => "Chicago Bulls",
        "homeScore" => "74",
        "guestScore" => "80"
    ],
    [
        "homeTeam" => "Brooklin Nets",
        "guestTeam" => "Los Angeles Clippers",
        "homeScore" => "67",
        "guestScore" => "50"
    ],
    [
        "homeTeam" => "New York Knicks",
        "guestTeam" => "Golden state Warriors",
        "homeScore" => "72",
        "guestScore" => "55"
    ],
    [
        "homeTeam" => "Philadelphia 76ers",
        "guestTeam" => "Milwaukee Bucks",
        "homeScore" => "83",
        "guestScore" => "59"
    ],
];

// var_dump($matches);


for ($i=0; $i < count($matches); $i++) { 
    echo $matches[$i]["homeTeam"] . " - " . $matches[$i]["guestTeam"] . " | " . $matches[$i]["homeScore"] . " - " . $matches[$i]["guestScore"] . "<br/>";
};

?>

</body>
</html>

