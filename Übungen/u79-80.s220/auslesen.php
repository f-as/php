<?php

$file = 'Datei.txt';

if(file_exists($file)) {
  $content = htmlspecialchars(file_get_contents($file));
  echo $content;
} else {
    echo 'Die Datei wurde nicht gefunden';
}

// $auslesen = file_get_contents($file);
// $auslesen1 = htmlspecialchars($auslesen);
//
// echo $auslesen1;
