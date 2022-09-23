# Intership PHP
> Raspunsurile se pot trimite ca un reply la email-ul care l-ati primit si pot avea forma:
>  - raspunsurile care nu necesita scriere de cod php se pot trece intr-un fisier word, pdf, etc.
>  - raspunsurilor care necesita scriere de cod PHP se trec in fisiere php cu conventia de nume: <<punct.php>> (ex: 3.php), sau se poate folosi un editor online care permite salvare, share sau download de fisier php (ex: https://onecompiler.com/php).  
>   - link catre un github repo (Recomandat, repository public) care sa contina cele 2 puncte de mai sus

### PHP
> 1 . Explica care este diferenta intre == si === si ce va return evaluarea celor doua expresii:
>
```php
    $a = 1; $b = "1";
    $a == $b;
    $a === $b;
```
###### R1:

``` 
 == means is equal, checks if it's the same value but doesn't check the type
 === means indentical, checks if it's the same value and the same type
 $a == $b returns true
 $a === $b returns false
```
<br />
<br />

---
> 2 . Enumera tipurile de iteratori (loops) din php si exemplifica fiecare prin scrierea unei bucati de cod care sa itereze peste un array care contine cifrele de la 0-99 si printeaza fiecare numar par.
###### R2:
```php
<?php

// Iterators in PHP are:
// while
// do...while
// for
// foreach

$end = 99;
$numbers = range(0, $end);

$i = 0;

while ($numbers[$i] < $end) {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }
    
    $i++;
}

echo "\n";

$i = 0;

do {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }

    $i++;
    
} while ($numbers[$i] < $end);

echo "\n";

for ($i = 0; $i < $end; $i++) {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] ";
    }
}

echo "\n";

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number ";
    }
}
```
<br />
<br />

---
 > 3 . Scrie o functie printString() care primeste ca parametru un string si printeaza parametrul primit.
 Urmatoarele doua bucati de cod apeleaza functia printString(). Care va fi rezultatul afisat pentru cele dous situatii? Explica rezultatele.
```php
$string = "String 1";
$str = &$string;
$str = "String 2";
printString($string);
```
```php
$string = "String1";
$str = "String 2";
$string = $str;
printString($string);
```
###### R3:
```php
<?php

$string = "String 1";
$str = &$string;
$str = "String 2";
printString($string);

/*
$str = &$string
here $str becomes a reference to $string
when we change $str we will also change $string

output: String 2
*/

$string = "String1";
$str = "String 2";
$string = $str;
printString($string);

/*
here $string gets replaced by $str

output: String 2
*/

function printString($string)
{
    echo "$string\n";
}
```
<br />
<br />

---
> 4 . Ce valoare va return functia? Explica rezultatul.
> 
```php
function calc($x) {
   return $x++;
}
print(calc(1));
```
###### R4:
```php
<?php

function calc($x) {
    // This will return 1 (unchanged X)
    // because postfix ++ increments the value after it is returned
    return $x++;
}
```
<br />
<br />

---
> 5 . Modifica linia de cod return $x++; din functia de la punctul precedent astfel incat rezultatul sa fie 1 incrementat cu 1, adica 2. Explica rezultatul.
###### R5:
```php
function calc($x) {
    // This will return 2
    // because prefix ++ increments the value before it is returned
    return ++$x;
}
```
<br />
<br />

---
> 6 . Scrie doua instructiuni for care itereaza peste un sir de numere de la 0-99 si care:
> - printeaza fiecare numar iterat si intrerupe iteratia la primul numar divizibil cu 5
> - printeaza numerele nedivizibile cu 5
###### R6:
```php
<?php

$end = 99;
$numbers = range(0, $end);

for ($i = 0; $i <= $end; $i++) {
    echo "$numbers[$i] ";

    // Zero is divisible by any number (except by itself)
    // We don't take this in consideration cause the loop would stop at 0

    if ($numbers[$i] > 0 && $numbers[$i] % 5 == 0) {
        break;
    }
}

echo "\n";

for ($i = 0; $i <= $end; $i++) {
    // Zero is divisible by any number (except by itself)
    // We take this in consideration so 0 is not displayed
    
    if ($numbers[$i] % 5 !== 0) {
        echo "$numbers[$i] ";
    }
}

// output: 
// 0 1 2 3 4 5 
// 1 2 3 4 6 7 8 9 11 12 13 14 16 17 18 19 21 22 23 24 26 ...
```
<br />
<br />

---
> 7 . Scrie o functie care primeste un parametru si printeaza tipul acestuia in felul urmator: daca e de tipul string va afisa mesajul "Tip String", daca e de tipul intreg va afisa mesajul "Tip Intreg", iar pentru orice alt tip va afisa mesajul "Tip Default". Foloseste structura switch-case in corpul functiei. Exemplifica apelarea functiei pentru a acoperi toate cele 3 cazuri de afisare de mesaje.
###### R7:
```php
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
```
<br />
<br />

---
> 8 . Avand urmatorul sir (array) scrieti conditiile if() separate pentru fiecare subpunct care:
> -   verifica daca sirul contine maxim 3 elemente si ca elementul cu indexul (key) 3 exista sau nu
> -   verifica daca elementul cu indexul (key) 2 are valoarea "doi" sau "trei"
> 
```php
$arr = ["unu", "doi", "trei"]
```
###### R8:
```php
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
```
<br />
<br />

---
> 9 . Descrieti si motivati utilitatea si utilizarea cookies si session variable. Exemplificati teoretic pe o aplicatie web ipotetica de tip emag.
###### R9:
```
HTTP is a stateless protocol
We use cookies and sessions so a site can remember who we are
This is useful for authentication, recommandations, shopping cart, etc...

Cookies save a small bit of information on the client side
Sessions save information on the server side

After login you get a session id as a cookie, and the session data is safely stored in the database
Now the website remembers who you are

After we logout or the session expires the session id is deleted
```
<br />
<br />

---
> 10 . Explicati error, warning si notice si efectele lor asupra executarii codului php.
###### R10:
```
Error - Errors that can not be recovered from so the execution of the script is halted
Warning - Signals that there is a problem which could cause bigger issues in the future, but doesn't stop the execution of the script
Notice - Similar to warning but less severe, mostly advisory
```
<br />
<br />

---
> 11 . Care sunt diferentele intre cele 3 nivele de visibilitate in OOP: public, protected si private.
###### R11:
```
public - is the default, attributes and methods of a class can be accesed from anywhere
protected - attributes and methods of the class can only be accessed within the class and by derived classes
private - attributes and methods of the class can only be accessed within the class
```
```php
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
```
<br />
<br />

---
> 12 . Ce este Overloading si Overriding in OOP? 
> - Exemplificati Overloading prin completarea codului:

```php
    class Math
    {
        function sum($unu, $doi) {
        
        }
        
        // De completat
    }
```
###### R12:
```
Overloading is when we use the same function name but with different quantities and types of parameters

function sum($unu, $doi) {

}

function sum($unu, $doi, $trei) {
    
}

This is not yet available in PHP but there are workarounds
```

```php
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

output:
5
7
```

> - Exemplificati Overriding prin completarea codului:

```php
    class Math
    {
        function sum($unu, $doi) {
        
        }     
    }
    
    // De completat
```
###### R12:
```
Overriding allows a child class to provide a different implementation of a method from the class that it extends
```
```php
<?php

class Math
{
    function sum($unu, $doi) {
        return $unu + $doi;
    }
}

class ReversedMath extends Math {

    function sum($unu, $doi) {
       return $unu - $doi;
    }
}

$math = new Math();
$reversedMath = new ReversedMath();

echo $math->sum(2, 3);
echo "\n";
echo $reversedMath->sum(2, 3);

output:
5
-1
```
<br />
<br />

---
> 13 . Ce sunt interfetele si clasele abstarcte? Scrieti codul pentru o interfata care se numeste Payments si care contine 2 metode: adauga si scade. Scrie o clasa OnlinePayments care foloseste interfata Payments.
###### R13:
```
Interfaces are used for defining behaviour, they tell you what methods a class must implement
All of the methods in an interface are abstract and public by default and they must be implemented in the class that uses the interface

Abstract classes like interfaces cannot be instantiated and can be considered like a blueprint for the class that extends them
They can have properties, protected and non-abstract methods unlike interfaces
```
```php
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
```
<br />
<br />

---
> 14 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa poata accessa varabila privata $cnp din clasa Parent:
```php
    class Parent
    {
        private $cnp;
    }
    
    class Child extends Parent
    {
        public function afiseazaDetalii()
        {
            // acceseaza variabia privata $cnp
        }
    }    
```
###### R14:
```
To access private $cnp inside the Child class
we must either create a getter or make the attribute protected
```
```php
<?php

class Parent
{
    private $cnp;

    public function __construct($cnp) {
        $this->cnp = $cnp;
    }

    protected function getCNP() {
        return $this->cnp;
    }
}

class Child extends Parent
{
    public function afiseazaDetalii() {
        // acceseaza variabia privata $cnp

        echo "{$this->getCNP()} \n";
    }
}

$child = new Child(12001324312312);

$child->afiseazaDetalii();
```
<br />
<br />

---
> 15 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa incarce constructorul clasei parinte:
```php
    class Parent
    {
        public function __construct()
        {
        }
    }
    
    class Child extends Parent
    {
       // De completat
    }    
```
###### R15:
```php
<?php

class Parent
{
    public function __construct()
    {
    }
}

class Child extends Parent
{
    // De completat

    public function __construct()
    {
        parent::__construct();
    }

}
```
<br />
<br />

---
> 16 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, modifica codul astfel incat apelul functiei afiseazaDetalii al clasei Child sa afiseze "afiseazaDetalii parinte afiseazaDetalii copil" 

```php
    class Parent
    {
        public function afiseazaDetalii()
        {
            print(" afiseazaDetalii parinte ");
        }
    }
    
    class Child extends Parent
    {
        public function afiseazaDetalii()
        {
            print(" afiseazaDetalii copil ");
        }
    }   
    
    $child = new Child();
    $child->afiseazaDetalii();
```
###### R16:
```php
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
```
<br />
<br />

---
> 17 . Clonarea obiectelor in PHP se pate face prin doua metode: copiere si clonare. Exemplificati prin cod pornind de la exemplu de mai jos cele doua metode si rezultatele obtinute.
```php
    class A
    {
        public $a = 100;
    }
    
    $obj = new A();
    // de completat
    // $b va fi obiectul clonat folosid cele 2 metode
    $b->x = 101;
    print($b->x);// ce se afiseaza?
    print($a->x);// ce se afiseaza?    
```
###### R17:
```
When we do &personClone = clone $person we create a new clone of the object
It has the same values but it is a new reference
When we change the clone it doesn't affect the original object

When we do $personCopy = $person we create a copy of the object
It has the same values and it is the same reference
When we change the copy it also changes the original object
```
```php
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

output:

person age: 33

person clone age: 54
person age: 33

person copy age: 54
person age: 54
```
<br />
<br />

---
> 18 . Descrie si exemplifica pe scurt doua Design Patterns la alegere.
###### R18:
```
Singleton - when we want to use the same instance of an object in the whole program
```

```php
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
```

```
Builder - used for constructing an object,
 it is useful when we have more than 4 parameters in a constructor
 it makes the code cleaner and we dont have to remember the order of the parameters
```

```php
<?php

class Product
{
    private $name;
    private $description;
    private $price;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }
}

class ProductBuilder
{
    private Product $product;

    public function createProduct()
    {
        $this->product = new Product();
        return $this;
    }

    public function setName($name)
    {
        $this->product->setName($name);
        return $this;
    }

    public function setDescription($description)
    {
        $this->product->setDescription($description);
        return $this;
    }

    public function setPrice($price)
    {
        $this->product->setPrice($price);
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }
}

$product = new ProductBuilder();

$product
    ->createProduct()
    ->setName("shoe 13")
    ->setDescription("some shoes")
    ->setPrice(100)
    ->getProduct();
```

### HTTP
> 19 . Care sunt HTTP Request Methods si care e specificul si contextul de folosire pentru fiecare dintre ele.
###### R19:
```
Most used HTTP Request Methods are

GET - used to retrieve data from the server
    - doesn't have a body
    - uses query parameters in the URL
    
POST - used to create new data to the server
     - has a body
     
PUT - used to entirely replace a resoure on the server
    - has a body
    
PATCH - used to update a resource on the server
      - has a body
      
DELETE - used to delete data on the server
       - doesn't have a body
       - uses query parameters in the URL
```
### MYSLQ
> 20 . Avand o aplicatie web de tip emag trebuie sa cream o baza de date relationala care sa cuprinda urmatoarele informatii in tabelele sale:
> - Categorie produse (category)
> - Produs (product)
> - Un produs poate sa apartina de mai multe categorii, iar o categorie poate sa nu contina niciun produs
> 
> Cerinte:
> - scrie codul mysq de creare a tabelelor product si category
> - scrie query-ul mysql care returneaza toate produsele impreuna cu informatiile despre categoria de care aparine
> - scrie query-ul mysql care returneaza toate categoriile fara produse
> - scrie query-ul mysql care ordoneaza crescator categoriile dupa numarul de produse care ii sunt asociate
###### R20:
```mysql
CREATE TABLE product
(
    product_id int NOT NULL,
    PRIMARY KEY (product_id)
);

CREATE TABLE category
(
    category_id int NOT NULL,
    PRIMARY KEY (category_id)
);

CREATE TABLE productCategory
(
    product_id  int,
    category_id int NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product (product_id),
    FOREIGN KEY (category_id) REFERENCES category (category_id)
);
```

```mysql
SELECT p.*, c.*
FROM product p
      INNER JOIN productCategory pc ON p.product_id = pc.product_id
      INNER JOIN category c ON c.category_id = pc.category_id
```

```mysql
SELECT c.*
FROM category c
      INNER JOIN productCategory pc ON c.category_id = pc.category_id
      WHERE pc.product_id is NULL;

```

```mysql
SELECT c.category_id, COUNT(pc.product_id) AS products_amount
FROM productcategory pc
         INNER JOIN product p ON p.product_id = pc.product_id
         INNER JOIN category c ON c.category_id = pc.category_id
GROUP BY c.category_id
```
### BAFTA!
