<?php

class Math
{
    function sum($unu, $doi) {
        return $unu + $doi;
    }
}

class ReversedMath extends Math {

    function sum($unu, $doi) {
       return $unu - $doi;
    }
}

$math = new Math();
$reversedMath = new ReversedMath();

echo $math->sum(2, 3);
echo "\n";
echo $reversedMath->sum(2, 3);