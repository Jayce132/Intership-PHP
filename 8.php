<?php

$arr = ["unu", "doi", "trei"];

if (count($arr) <= 3) {
    echo "Array size is less than or equal to 3\n";
    echo "Because of that there is no element at index 3\n";

} else {
    // could throw an Exception here
    echo "Array size exceeds maximum of 3\n";
    echo "Element at index 3: $arr[3]\n";
}

if (array_key_exists(2, $arr)) {

    if ($arr[2] == "doi") {
        echo "Element at index 2 has value 'doi'\n";

    } else if ($arr[2] == "trei") {
        echo "Element at index 2 has value 'trei'\n";

    } else {
        echo "Element at index 2 doesn't have value 'doi' or 'trei'\n";
    }

} else {
    // could throw an Exception here
    echo "Element at index 2 doesn't exist\n";
}
