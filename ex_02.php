<?php

/*
    2 - (choix libre de langage) Voici une phrase “Testing text parser return value”
        Votre programme devra retourner le texte en majuscule, puis en minuscule, si en input console il y’a
        deux arguments en paramètre, les comparer entre eux si ils sont identiques, le programme retourne «
        1 » si c’est pas le cas « 0 ».

 */
$string = "Testing text parser return value";
array_shift($argv);

if (count($argv) == 2)
{
    var_dump(strtoupper($string), strtolower($string));

    if ($argv[0] == $argv[1])
    {
        var_dump(1);
    } else {
        var_dump(0);
    }
}