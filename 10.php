<?php

// Example of warning
include "missing.php";

echo "Program execution is not halted\n";

// Example of error
function makeError($value) {};

makeError();

// This will not get to be executed
echo "Program execution is halted\n";