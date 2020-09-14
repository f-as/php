<?php
echo 'variablen.php'.'<br>';   // br for break yanzel sa6er

/*
$name = 'Peter';  //$_name :::lower camel case
echo gettype($name); //le ma3refat naw3 el malaf

$blabla;
echo gettype($blabla);

// += -= /= *= %=
// + - / * %

$zahl = 4;
$zahl += 3;
echo $zahl;

// i++ // i--

$i = 1 ;
echo ++$i;
echo $i;

*/

$name ='Klaus';
$text = "Mein Name ist $name"; //besser style:: $text = 'Mein Name ist '. $name;
$text = 'Mein Name ist '. $name;// besser!

echo $text;
