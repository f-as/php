<?php
extract($_POST);
// $name = $_POST['name'];
// $email = $_POST['email'];
// $inhalt = $_POST['inhalt'];
//$inhalte = $_POST;
//var_dump($inhalte['farbe']);
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Auslesen</title>
    </head>
    <body>
        <table>
            <tr>
                <td>Name:</td>
                <td><?= $name; ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $email; ?></td>
            </tr>
            <tr>
                <td>Inhalt:</td>
                <td><?= $inhalt; ?></td>
            </tr>
            <tr>
                <td>Farbe:</td>
                <td><?= implode(', ', $farbe); ?></td>
            </tr>
        </table>

    </body>
</html>
