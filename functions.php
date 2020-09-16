<?php

//$name = 'Peter';
//var_dump($name); //liefert uns informationen über die Variable

//$zahl = 3.54;
//var_dump($zahl);

//$value = true;
//var_dump($value);

//$name = 'Peter';
//echo isset($name); //is it deklariert und initialisiert ?

//unset($name); // löscht Variable aus der aktueelen Namenstabelle
//echo isset($name);

//echo !empty($name); // fragt nach Deklaration ohne Initialisierung
// ! als Negationsoperator

// Integer ************************************************************
$zahl = 4.7;
echo is_int($zahl);//liegt ein Integer Wert vor?

echo intval($zahl); //wandelt wenn möglich in Integer um ohne zu runden

// Float
echo is_float($zahl).'<br>';
echo floatval('5.3').'<br>';

echo '4' + 5;

// String *************************************************************

$name = 'O\'Reilly'; //Backslash als Maskierungszeichen
echo $name;

echo is_string($name).'<br>';
echo strval(42).'<br>';
echo strlen($name).'<br>'; //Länge der Zeichenkette

echo gettype($zahl);
echo gettype((int) $zahl); 
