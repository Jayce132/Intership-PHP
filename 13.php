<?php

interface Payments {
    public function adauga();

    public function scade();
}

abstract class OnlinePayments implements Payments {
    public $balance = 0;

    public function adauga() {
        $this->balance++;
    }

    public function scade()
    {
        $this->balance--;
    }
}

class MyPayments extends OnlinePayments {

}

$myPayments = new MyPayments();
$myPayments->adauga();

echo $myPayments->balance;
