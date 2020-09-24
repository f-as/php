<?php
session_start();

$languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$languages = explode(',', $languages);
switch($languages[0]) {
    case 'de' : $greeting = 'Hallo';
    break;
    case 'de-CH':  $greeting = 'Grüszi';
    break;
    case 'bg': $greeting = 'Zdraveĭte';
    break;
    case 'en': $greeting = 'Hello';
    break;
    case 'en-us': $greeting = 'Howdi';
    break;
    default: $greeting = 'Hallo';

}

$name = $_SESSION['name'] ?? 'Gast';

?>
<p><?= $greeting .' '. $name; ?></p>
<a href="eintragen.php">Eintragen</a> ||
<a href="loeschen.php">Löschen</a> ||
<a href="weiter.php">Weiter</a>
