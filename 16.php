<?php

class Parent1
{
    public function afiseazaDetalii()
    {
        print(" afiseazaDetalii parinte ");
    }
}

class Child extends Parent1
{
    public function afiseazaDetalii()
    {
        parent::afiseazaDetalii();
        print(" afiseazaDetalii copil ");
    }
}

$child = new Child();
$child->afiseazaDetalii();