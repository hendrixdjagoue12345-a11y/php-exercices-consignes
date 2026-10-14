<?php
declare(strict_types=1);
$artiste = 'Neon Pulse';
$numero = 23;
$prix = 35.0;
// TODO : produire trois affichages distincts.

echo"$artiste : " . $artiste . PHP_EOL;
echo "$numero". $numero . PHP_EOL;
echo "$prix". $prix . PHP_EOL;

echo "Concert de $artiste \n";

echo sprintf("Billet n°%04d", $numero);
 
