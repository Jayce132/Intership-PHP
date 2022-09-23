<?php

class Math
{
    function __call($functionName, $arguments) {

        if ($functionName == 'sum') {

            switch (count($arguments)) {
                case 2:
                    return $arguments[0] + $arguments[1];

                case 3:
                    return $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}

$math = new Math();

echo $math->sum(2, 3);
echo "\n";
echo $math->sum(2, 3, 2);
