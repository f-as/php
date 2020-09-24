<?php
//Übung 78
$file = 'zeit.txt';
$content = file_get_contents($file);

$zeit = date('d.m.Y H:i', $content);
$zeit .= 'Uhr';
echo $zeit;
