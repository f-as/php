<?php

$file = 'inhalt.txt';
$text = array('Hallo', 'Welt');
$text = serialize($text);
$text .= "\n";
file_put_contents($file, $text, FILE_APPEND);

$content = file_get_contents($file);

var_dump($content);
$content = trim($content);
$data = explode("\n",$content);

for($i = 0; $i < count($data); $i++) {
    $data[$i] = unserialize($data[$i]);
}

var_dump($data);
