<?php
session_start();
if(!isset($_SESSION['name'])) {
    header('Location: zugriff_verweigert.php');
}

$name = $_SESSION['name'] ?? 'Gast';
unset($_SESSION['name']);
?>
<p>Hallo <?= $name; ?></p>

<a href="eintragen.php">Eintragen</a> ||
<a href="anzeigen.php">Anzeigen</a>
