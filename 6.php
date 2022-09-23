<?php

$end = 99;
$numbers = range(0, $end);

for ($i = 0; $i <= $end; $i++) {
    echo "$numbers[$i] ";

    // Zero is divisible by any number (except by itself)
    // We don't take this in consideration cause the loop would stop at 0

    if ($numbers[$i] > 0 && $numbers[$i] % 5 == 0) {
        break;
    }
}

echo "\n";

for ($i = 0; $i <= $end; $i++) {
    // Zero is divisible by any number (except by itself)
    // We take this in consideration so 0 is not displayed

    if ($numbers[$i] % 5 !== 0) {
        echo "$numbers[$i] ";
    }
}

// output:
// 0 1 2 3 4 5
// 1 2 3 4 6 7 8 9 11 12 13 14 16 17 18 19 21 22 23 24 26