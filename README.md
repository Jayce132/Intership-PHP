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
