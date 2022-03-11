<?php


if (empty($data)) {
    echo 'Nessun parametro passato!';
} else {
    foreach($data as $chiave => $valore) {
        echo $chiave . ' - ' . $valore . '<br>';
    }
}

