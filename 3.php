<?php

$string = "String 1";
$str = &$string;
$str = "String 2";
printString($string);

/*
$str = &$string
aici $str primeste $string ca referinta
deci cand o sa schimbam $str o sa se schimbe si $string
ex: $str = "String 2"; inseamna ca $string devine "String 2"

afiseaza String 2
*/

$string = "String1";
$str = "String 2";
$string = $str;
printString($string);

/*
aici $string primeste copie a lui $str

afiseaza String 2
*/

function printString($string)
{
    echo "$string\n";
}
