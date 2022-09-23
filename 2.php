<?php

// Iterators in PHP are:
// while
// do...while
// for
// foreach

$end = 99;
$numbers = range(0, $end);

$i = 0;

while ($numbers[$i] < $end) {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }

    $i++;
}

echo "\n";

$i = 0;

do {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }

    $i++;

} while ($numbers[$i] < $end);

echo "\n";

for ($i = 0; $i < $end; $i++) {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }
}

echo "\n";

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number ";
    }
}