<?php
declare(strict_types=1);
$pseudo = 'Nova';
$niveau = 7;
$energie = 84.5;
$actif = true;
// TODO : afficher la présentation, les types et une comparaison stricte.

echo "Joueur : $pseudo, niveau $niveau, énergie $energie, actif : ";

if ($actif) {
    echo "oui";
} else {
    echo "non";
}

echo PHP_EOL;
echo get_debug_type($pseudo) . PHP_EOL;
echo get_debug_type($energie) . PHP_EOL;
echo get_debug_type($actif) . PHP_EOL;
echo get_debug_type($energie) . PHP_EOL;

$comparaison = ($niveau === '7');
echo $comparaison;
