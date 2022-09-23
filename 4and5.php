<?php

function calc($x) {
    // This will return 1 (unchanged X)
    // because postfix ++ increments the value after it is returned
    return $x++;
}


function calc2($x) {
    // This will return 2
    // because prefix ++ increments the value before it is returned
    return ++$x;
}

print calc(1);
print calc2(1);