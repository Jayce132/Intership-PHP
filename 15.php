<?php

class Parent1
{
    public function __construct()
    {
    }
}

class Child extends Parent1
{
    // De completat

    public function __construct()
    {
        parent::__construct();
    }

}