# Intership PHP
> Pentru completarea raspunsurilor care necesita scriere de cod PHP se poate folosi orice metoda:
>    - folosirea locala a aunui editor php si atasarea in commit a unui fisier php pentru fiecare punct
>    - folosirea editorului online https://onecompiler.com/php care permite salvare , share sau download de fisier php
>    - orice alta metoda care sa fie descifrabila :)

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

> 6 . Scrie doua instructiuni for care itereaza peste un sir de numere de la 0-99 si care:
> - printeaza fiecare numar iterat si intrerupe iteratia la primul numar divizibil cu 5
> - printeaza numerele nedivizibile cu 5

> 7 . Scrie o functie care primeste un parametru si printeaza tipul acestuia in felul urmator: daca e de tipul string va afisa mesajul "Tip String", daca e de tipul intreg va afisa mesajul "Tip Intreg", iar pentru orice alt tip va afisa mesajul "Tip Default". Foloseste structura switch-case in corpul functiei. Exemplifica apelarea functiei pentru a acoperi toate cele 3 cazuri de afisare de mesaje.

> 8 . Avand urmatorul sir (array) scrieti conditiile if() separate pentru fiecare subpunct care:
> -   verifica daca sirul contine maxim 3 elemente si ca elementul cu indexul (key) 3 exista sau nu
> -   verifica daca elementul cu indexul (key) 2 are valoarea "doi" sau "trei"
> 
```php
$arr = ["unu", "doi", "trei"]
```

> 9 . Descrieti si motivati utilitatea si utilizarea cookies si session variable. Exemplificati teoretic pe o aplicatie web ipotetica de tip emag.

> 10 . Explicati error, warning si notice si efectele lor asupra executarii codului php.

> 11 . Care sunt diferentele intre cele 3 nivele de visibilitate in OOP: public, protected si private.

> 12 . Ce este Overloading si Overriding in OOP? 
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

> 13 . Ce sunt interfetele si clasele abstarcte? Scrieti codul pentru o interfata care se numeste Payments si care contine 2 metode: adauga si scade. Scrie o clasa OnlinePayments care foloseste interfata Payments.

> 14 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa poata accessa varabila privata $cnp din clasa Parent:

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

> 15 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, completati codul astfel incat clasa Child sa incarce constructorul clasei parinte:

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

> 16 . Avand urmatoarele doua clase definite de relatia de mostenire intre ele, modifica codul astfel incat apelul function afiseazaDetalii al clasei Child sa afiseze "afiseazaDetalii parinte afiseazaDetalii copil" 

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

> 17 . Clonarea obiectelor in PHP se pate face prin doua metode: copiere si clonare. Exemplificati prin cod pornind de la exemplu de mai jos cele doua metode si rezultatele obtinute.

> 
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

> 18 . Descrie si exemplifica pe scurt doua Design Patterns la alegere.

### HTTP
> 19 . Care sunt HTTP Request Methods si care e specificul si contextul de folosire pentru fiecare dintre ele.

### MYSLQ
> 20 . Avand o aplicatie web de tip emag trebuie sa cream o baza de date relationala care sa cuprinda urmatoarele informatii in tabelele sale:
> - Categorie produse (category)
> - Produs (product)
> Un produs poate sa apartina de mai multe categorii, iar o categorie poate sa nu contina niciun produs.
> Cerinte:
> - scrie codul mysq de creare a tabelelor product si category
> - scrie query-ul mysql care returneaza toate produsele impreuna cu informatiile despre categoria de care aparine
> - scrie query-ul mysql care returneaza toate categoriile fara produse
> - scrie query-ul mysql care ordoneaza crescator categoriile dupa numarul de produse care ii sunt asociate

### BAFTA!
