<?php

class Singleton
{
    private static $instance;

    private function __construct()
    {
       echo "This initializes only once";
    }

    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}

$first = Singleton::getInstance();
$second = Singleton::getInstance();

var_dump($first === $second);