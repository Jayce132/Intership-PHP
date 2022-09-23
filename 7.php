<?php

function printType($value)
{
    switch (gettype($value)) {
        case "string":
            echo "Tip String \n";
            break;

        case "integer":
            echo "Tip Intreg \n";
            break;

        default;
            echo "Tip Default \n";
            break;
    }
}

// "1" is of type string
// case "string"
printType("1");

// 1 is of type integer
// case "integer"
printType(1);

// true is of type boolean
// case default
printType(true);