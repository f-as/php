<?php
session_start();

$name = $_SESSION['name'] ?? 'Gast';

if(!isset($_POST['eintragenSub'])) {
?>
<p>Hallo <?= $name; ?></p>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name">
    <input type="submit" name="eintragenSub" value="eintragen">
</form>
<a href="anzeigen.php">Anzeigen</a> ||
<a href="loeschen.php">Löschen</a>
<?php
} else {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;

    header('Location: anzeigen.php');
    exit;
}
