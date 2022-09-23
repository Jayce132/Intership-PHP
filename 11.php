<?php

class Base {
    public $name;
    private $age;
    protected $height;

    public function __construct($name, $age, $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
    }

    function getAge() {  // a public function (default)
        return $this->age;
    }
}

class Derived extends Base {

    // Derived has access to Base height attribute because it is protected
     function getHeight() { // a public function
        return $this->height;
    }
}

$derived = new Derived("Chris", 27, 1.8);

echo "$derived->name \n"; // is public, can be accessed from outside of class
echo "{$derived->getAge()} \n"; // we need to use the public method to access the private variable
echo "{$derived->getHeight()} \n"; // we use the public method to access a protected variable from here