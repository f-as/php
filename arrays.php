<?php

// $liste = [1,2,3,4,5,7,11];
//
// echo gettype($liste).'<br>';
//
// $liste2 = array(1,2,3,5,8,0).'<br>';
//
// $liste3[] = 'Peter'.'<br>';
// var_dump($liste3);
//
// $liste3[5] = 'Babette'.'<br>';
// var_dump($liste3);
//
// $liste3[] = 'Gabi'.'<br>';
// var_dump($liste3);
//
// $length = count($liste3); //count() zählt die Anzahl von Array-Elementen
//
//
// $liste4['name'] = 'Walter';
// $liste4['altr'] = 42;
//
// var_dump($liste4);
//
// $liste5 = array('name' => 'Walter', 'alter' => 42);
// $liste6 = array('name' => 'Peter', 'alter' =>87);
//
// $personen = array($liste5, $liste6);
// echo $personen[0]['name'];
//
// $liste[1] = 1;
// var_dump($liste6);
//
// echo is_array($liste6);
//
// $string = '0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F';
// $liste7 = explode(',', $string); //Zerlegt string nach Suchmuster
// var_dump($liste7);
//
// $liste8 = str_split($string); // Zerlegt String Bitweise
// var_dump($liste8);
//
// $string = implode('#', $liste7); // Bildet aus einem Array einen String
// var_dump($string);
//
// var_dump($liste2);
// shuffle($liste2); // ändert die Rheinfolge der Array-Elemente zufällig
// var_dump($liste2);
//
// echo in_array('Peter', $liste3); // Elemente in Array zu finden ?
//
// var_dump($liste3);
// $liste3 = array_reverse($liste3); // dreht die Rheinfolge der Elemente um
// var_dump($liste3);

$person = array('name' => 'Peter',
                'alter' => 42,
                'ledig' => true);

var_dump(array_keys($person));// liefert Feldnamen im Array
var_dump(array_values($person)); // liefert Werte im Array


foreach($person as $e) {
  echo $e.'<br>';
}

foreach($person as $key => $value) {
    echo $key.': '.$value.'<br>';

}

$zahlen = [1,2,5,7,42,11];
var_dump($zahlen);
array_pop($zahlen); //enfernt letztes Element im Array
var_dump($zahlen).'<br>';

//echo array_shift($zahlen).'<br>'; // entfernt erstes Element aus Array
var_dump($zahlen).'<br>';
