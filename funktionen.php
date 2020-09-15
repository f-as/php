<?php

function sageHallo($name = 'Mustermann', $vorname = 'MAX') {

    $text = 'Hallo' . $vorname. ' ' . $name;

    return $text

}

echo sageHallo();
