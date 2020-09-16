<?php

require_once('config/config.php');

//include_once('functionsX.php');
require_once('functions.php');


/*
if(isset($_GET['nav']) && !empty($_GET['nav'])) {
    $nav = $_GET['nav'];
} else {
    $nav = 'Wäre sonst leer gewesen';
}  */

//$nav = (isset($_GET['nav'])) ? $_GET['nav'] : null;
//$nav = (!empty($nav)) ? $nav : 'Wäre sonst leer gewesen';

// Null coalescing Operator *******************************************
$nav = $_GET['nav'] ?? null;
$nav = (!empty($nav)) ? $nav : 1;
//$nav = (!empty($nav)) ? $nav : 'Wäre sonst leer gewesen';

//$nav = (!empty($_GET['nav'] ?? null)) ? $_GET['nav'] : 'Wäre sonst leer gewesen';

// Null coalescing Operator

//$nav = $_GET['nav'] ?? 'Wäre sonst leer gewesen'; // stat Zeile 8 bis 12

//echo $nav;

// switch($nav) {
//     case 1: $template = 'seite1';
//     break;
//     case 2: $template = 'seite2';
//     break;
//     case 3: $template = 'seite3';
//     break;
//     case 4: $template = 'seite4';
//     break;
//     case 5: $template = 'seite5';
//     break;
//     default: $template = 'seite1';
// }
//
// $template = 'templates/'. $template . '.php';
// echo $template;



$template = navigator();

require_once('templates/layout.php');
?>
