<?php

class Parent1
{
    private $cnp;

    public function __construct($cnp) {
        $this->cnp = $cnp;
    }

    protected function getCNP() {
        return $this->cnp;
    }
}

class Child extends Parent1
{
    public function afiseazaDetalii()
    {
        // acceseaza variabia privata $cnp

        echo "{$this->getCNP()} \n";
    }
}

$child = new Child(12001324312312);

$child->afiseazaDetalii();