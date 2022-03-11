<?php

$array = [
    'a' => 'stringa_1',
    'b' => 'stringa_2',
    'c' => 'stringa_3',
    'd' => 'stringa_4',
];

foreach ($array as $chiave => $valore) {
    echo $chiave . ' - '. $valore . '<br>';
}


$animali = [
    'mammiferi' => ['mucca', 'maiale', 'cavallo', 'cane'],
    'uccelli' => ['anatra', 'gallina']
];

foreach ($animali as $chiave => $animale) {

    echo '<h1>Sto ciclando: ' . $chiave . '</h1>';

    foreach ($animale as $singoloAnimale) {
        echo '<p>'.$singoloAnimale.'</p>';
    }
   
}