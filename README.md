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
