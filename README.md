# Intership PHP
Pentru completarea raspunsurilor foloseste un fisier (PDF, WORD, etc) care va fi comis la acest repository.

### PHP
> 1 . Explica care este diferenta intre == si === si ce va return evaluarea celor do expresii:
> 
```php
    $a = 1; $b = "1";
    $a == $b;
    $a === $b;
```
> 2 . Enumera tipurile de iteratori (loops) din php si exemplifica fiecare prin scrierea unei bucati de cod care sa itereze peste un array care contine cifrele de la 0-99 si printeaza fiecare numar par.

 > 3 . Scrie o functie printString() care primeste ca parametru un string si printeaza parametrul primit.
 Urmatoarele doua bucati de cod apeleaza functia printString(). Care va fi rezultatul afisat pentru cele dous situatii? Explica rezultatele.
> 
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
> 4 . Ce valoare va return functia? Explica rezultatul.
> 
```php
function calc($x) {
   return $x++;
}
print(calc(1));
```

> 5 . Modifica linia de cod return $x++; din functia de la punctul precedent astfel incat rezultatul sa fie 1 incrementat cu 1, adica 2. Explica rezultatul.

> 6 . Scrie o functie care primeste un parametru si printeaza tipul acestuia in felul urmator: daca e de tipul string va afisa mesajul "Tip String", daca e de tipul intreg va afisa mesajul "Tip Intreg", iar pentru orice alt tip va afisa mesajul "Tip Default". Foloseste structura switch-case in corpul functiei. Exemplifica apelarea functiei pentru a acoperi toate cele 3 cazuri de afisare de mesaje.

> 7 . Avand urmatorul sir (array) scrieti conditiile if() separate pentru fiecare subpunct care:
> -   verifica daca sirul contine maxim 3 elemente si ca elementul cu indexul (key) 3 exista sau nu
> -   verifica daca elementul cu indexul (key) 2 are valoarea "doi" sau "trei"
> 
```php
$arr = ["unu", "doi", "trei"]
```

> 7 . Descrieti si motivati utilitatea si utilizarea cookies si session variable. Exemplificati teoretic pe o aplicatie web ipotetica de tip emag.

> 8 . Explicati error, warning si notice si efectele lor asupra executarii codului php.

> 9 . Care sunt diferentele intre cele 3 nivele de visibilitate in OOP: public, protected si private.

> 10 . Ce este Overloading si Overriding in OOP? 
> - Exemplificati Overloading prin completarea codului:
> > 
```php
    class Math
    {
        function sum($unu, $doi) {
        
        }
        
        // De completat
    }
```

> - Exemplificati Overriding prin completarea codului:
> 
```php
    class Math
    {
        function sum($unu, $doi) {
        
        }     
    }
    
    // De completat
```

> 10 . Ce sunt interfetele si clasele abstarcte? Scrieti codul pentru o interfata care se numeste Payments si care contine 2 metode: adauga si scade. Scrie o clasa OnlinePayments care foloseste interfata Payments.

> 11 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa poata accessa varabila privata $cnp din clasa Parent:

> 
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

> 12 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa incarce constructorul clasei parinte:

> 
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

> 12 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, modifica codul astfel incat apelul function afiseazaDetalii al clasei Child sa afiseze "afiseazaDetalii parinte afiseazaDetalii copil" 

> 
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


