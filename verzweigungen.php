<?php
$zahl = 4;

if ($zahl >= 5) {
    echo 'Jopp, größer/gleich 5';
} else if($zahl < 0) {
    echo 'negativ';
} else {
    echo 'Nope';
}


if($zahl == 5): ?>
<span>BLA</span>
<?php endif; ?>

<?php

switch($zahl) {
    case 1: echo '1';
    break;
    case 2: echo '2';
    break;
    case 3: echo '3';
    case 4: ;
    case 5: echo '2';
    break;
    case 6: echo '6';
    break;
    default: echo 'irgendwas';
}


$value = '';
$zahl = 42;
if ($zahl == 42) {
    $value = 'Das ist die richtige Antwort';
} else {
    $value = 'Das ist leider falsch';
}
echo $value;

// Tenärer Operator
$value = ($zahl == 42) ? 'Das ist die richtige Antwort' : 'Das ist leider falsch';
echo $value;
