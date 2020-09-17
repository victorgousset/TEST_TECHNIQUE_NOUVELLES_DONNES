<?php

/*
    1 - (choix libre de langage) Voici un tableau d'entiers [1, 4, 6, 9, 16, 18, 59, 20, 30, 1, 9,]
        Ecrire un code qui retrouverait la position du nombre recherché, le code devra prendre en argument,
        l’input de la console (Terminal).

        Le programme devra aussi retourner « true » si le nombre ou chiffre est présent deux fois dans le
        tableau.

        Exemple : Retrouver le 9
 */

$array = [1, 4, 6, 9, 16, 18, 59, 20, 30, 1, 9,];
array_shift($argv);

$array_doublon = [];

for ($i = 0; $i < count($array); $i++)
{
    if ($array[$i] == $argv[0])
    {
        array_push($array_doublon, $array[$i]);
        echo "Position: " . $i . "\n";
    }
}

if (array_search($argv[0], $array) === false)
{
    echo "Ce chiffre n'est pas present dans le tableau" . "\n";
}

if (count($array_doublon) > 1) {
    echo "true" . "\n";
}