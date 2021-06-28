<!-- ## Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>

<h1>Snack-2</h1>

<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$access = "";
$tip = "";

if ( empty($name) && empty($email) && empty($age) ) {
    $access = "Accesso negato";
    $tip = "Devi riempire tutti e 3 i campi";
} elseif ( strlen($name) < 3 ){
    $access = "Accesso negato";
    $tip = "Il nome deve essere più lungo di 3 caratteri";
} elseif ( !strpos($email, "@") || !strpos($email, ".") ) {
    $access = "Accesso negato";
    $tip = "La mail deve contenere un punto e una chiocciola";
} elseif ( !is_numeric($age) ) {
    $access = "Accesso negato";
    $tip = "L'età deve essere un numero";
} else {
    $access = "Accesso riuscito";
};


?>

<h3><?php echo $access ?></h3>
<h3><?php echo $tip ?></h3>

    
</body>
</html>