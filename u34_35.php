<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Übung 34/35</title>
    </head>
    <body>

        <a href="<?= $_SERVER['PHP_SELF'].'?vorname=Max&nachname=Mustermann'; ?>">Klick mich</a>

        <?php
        $vorname = $_GET['vorname'];
        $nachname = $_GET['nachname'];

        echo 'Hallo '.$vorname.' '.$nachname.'. Schön, dass Sie wieder da sind.'
        ?>
    </body>
</html>
