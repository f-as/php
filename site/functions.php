<?php
function sageHallo($name) {
    return 'Hallo'. $name . '. schön, dass Du wieder da bist!';
}

function navigator() {
  $nav = $_GET['nav'] ?? null;
  $nav = (!empty($nav)) ? $nav : 1;

  switch($nav) {
      case 1: $template = 'seite1';
      break;
      case 2: $template = 'seite2';
      break;
      case 3: $template = 'seite3';
      break;
      case 4: $template = 'seite4';
      break;
      case 5: $template = 'seite5';
      break;
      default: $template = 'seite1';
  }

  $template = 'templates/'. $template . '.php';

  return $template;

}
