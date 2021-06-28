<!-- ## Snack 3

Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>

<?php 

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $number = rand(1, 100);

    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    };
};

echo "<pre>";
var_dump($randomNumbers);
echo "</pre>";




?>

    
</body>
</html>