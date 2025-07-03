<?php

$voti = [7, 8, 9, 6, 10];

function calcolaMedia($arrayVoti) {
    $sommavoti = array_sum($arrayVoti);
    $numerovoti = count($arrayVoti);

    return $sommavoti / $numerovoti;
}

echo "Elenco dei voti:<br>";
foreach ($voti as $indice => $voto) {
    echo "Voto " . $indice . ": " . $voto . "<br>";
}

$media = calcolaMedia($voti);

echo "<br>La media dei voti è: " . number_format($media, 2) . "<br>";

if ($media>=6) {
echo "Promosso!"; }

else {
echo "Deve migliorare."; }


?>
