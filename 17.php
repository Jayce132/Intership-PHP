<?php

class Person {
    public $age = 33;
}

$person = new Person();

echo "person age: {$person->age}\n\n";

$personClone = clone $person;
$personClone->age = 54;

echo "person clone age: {$personClone->age}\n";
echo "person age: {$person->age}\n\n";

$personCopy = $person;
$personCopy->age = 54;


echo "person copy age: {$personCopy->age}\n";
echo "person age: {$person->age}\n";