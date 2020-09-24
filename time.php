<?php

echo time(); // Gibt den Timestamp zurücombak


// formatiert Timestamp zu lesbarem string mit Gestaltungsangabe
echo strftime('%d.%m.%y');  //string format time 21.09.2020
echo '<hr>';
echo strftime('%m-%d-%y');
echo '<hr>';
echo strftime('%m%d%y');
echo '<hr>';
echo strftime('%H:%M:%S');


echo '<hr>';
$uhrzeit = '13:50';
$datum = '21.09.2020';

$uhrzeitParts = explode(':', $uhrzeit);
$datumParts = explode('.', $datum);

var_dump($uhrzeitParts);
var_dump($datumParts);


echo '<hr>';
echo mktime($uhrzeitParts[0], $uhrzeitParts[1],0,$datumParts[0],$datumParts[2]);
//Ermittelt Timesta,p zu angegebenen Zeitpunkt
echo '<hr>';
echo mktime(0,0,0,1,1,2010);
echo '<hr>';
echo mktime(0,0,0,1,1,10);


echo '<hr>';
$time = '2020-09-21 13:45';
echo strtotime($time);

echo '<hr>';
echo date('d.m.y');
