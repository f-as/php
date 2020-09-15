<?php
$farben = ['rot', 'grün', 'blau', 'fuchsia', 'gelb',
           'schwarz', 'lila', 'braun', 'grau', 'orange'];

$farben2 = array('red' => 'rot',
                 'green' => 'grün');
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Eintragen</title>
    </head>
    <body>
        <form action="auslesen.php" method="post">
            <input type="text" name="name">
            <input type="email" name="email">
            <textarea name="inhalt"></textarea>

            <?php foreach($farben as $f): ?>
            <br><label><?= $f; ?></label><input type="checkbox" name="farbe[]" value="<?= $f; ?>">
            <?php endforeach; ?>

            <hr>
            <?php foreach($farben2 as $key => $value): ?>
            <br><label style="background-color:<?= $key ?>"><?= $value; ?></label><input type="radio" name="farbe" value="<?= $value; ?>">
            <?php endforeach; ?>

            <input type="submit" name="submit" value="absenden">
        </form>
    </body>
</html>
