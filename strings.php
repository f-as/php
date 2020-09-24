<?php

$text = "Hello World     ";

echo ':'.$text  . ':';
echo strlen($text);


$text = trim($text); // entferrnt Leerzeichen am Anfang und am ende des Strings
echo strlen($text);

echo '<hr>';

echo strtoupper($text); // wandelt die zeichenkette in Großbuchstaben um
echo strtolower($text); // andelt die zeichenkette in Kleinbuchstaben um

echo '<hr>';

$text = 'hello world';
echo ucfirst($text); // wandelt erstes Zeichen in Großbuchstabenum
echo lcfirst($text); // wandelt erstes Zeichen in Kleinbuchstabenum

echo '<hr>';

$text = '<a href="#">Link</a>'; //um Link zu bauen
echo $text;
echo htmlspecialchars($text); // wandelt relevanten Zeichen in HTML Entities um

echo '<hr>';

$text = '<a href=#>Link2</a>';
echo $text;
echo strip_tags($text); // entfernt Tags ersatzlos

echo '<hr>';


$text = 'Hallo
Welt';
echo $text;
echo nl2br($text); // ersetzt Zeilenumbrüche durch ein <br>

echo '<hr>';

$daten = array('Peter', 'Kochbuch', 42);
echo $daten[0] . 'liebt sein' . $daten[1] . 'seit' . $daten[2] . 'Jahren';
vprintf('%s liebt sein %s seit %d Jahren',$daten); // formatierter String mit Platzhaltern
echo sprintf('%s liebt sein %s seit $d Jahren',$daten[0],$daten[1],$daten[2]);

echo '<hr>';

$text = 'Hallo Welt';
echo substr($text, 6, 2); // Teistring( 1 param : Zeichenkette, 2 param: Start, 3 param:länge ) zahlt die Buchstaben in String ;; hier fängt bei  an und endet mit 2

echo '<hr>';
$text = str_replace('Welt', 'Otto', $text); // ersetzt in Zeichenkette (suchmuster. Ersetzung, Bezugsstring)
echo $text;


echo '<hr>';
$text = 'Hello World';
echo strlen($text); // Ermittelt Zeichenanzahl

echo'<hr>';
echo strpos($text, 'W'); // ermittelt Index eines bestimmtes Zeichnes

echo'<hr>';
