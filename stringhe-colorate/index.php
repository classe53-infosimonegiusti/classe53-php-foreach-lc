<?php
//    Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

if (empty($_GET['password']) ) {
    echo "Errore";
    die();
} else {
    if ($_GET['password'] == "Boolean") {
        $classe = 'verde';
    } else {
        $classe = 'rosso';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1 class="<?php echo $classe;?>" >La password che hai inserito è : <?php echo $_GET['password'];  ?></h1>
</body>
</html>

