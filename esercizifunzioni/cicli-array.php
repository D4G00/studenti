<?php
  
   echo "<h4>Numeri pari da 2 a 20:</h4><br>";
for ($p = 2; $p <= 20; $p++) {
    if ($p % 2 == 0) {
        echo $p . "<br>";
    }
}


echo "<h4>Numeri dispari da 1 a 19:</h4><br>";
$d = 1;
while ($d <= 19) {
    if ($d % 2 != 0) {
        echo $d . "<br>";
    }
    $d++;
}

echo "<h4>Numeri decrescenti da 10 a 1:</h4><br>";
$c = 10;
do {
    echo $c . "<br>";
    $c--;
} while ($c >= 1);

$cities = ["Milano", "Roma", "Torino", "Napoli", "Bologna", "Firenze"];

echo "<h4>Elenco città in ordine:</h4><br>";
if (empty($cities)) {
    echo "Nessuna città disponibile\n";
} else {
    foreach ($cities as $city) {
        echo $city . "<br>";
    }
}

?>