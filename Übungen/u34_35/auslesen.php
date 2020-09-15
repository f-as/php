<?php
extract($_POST);
// $name = $_POST['name'];
// $email = $_POST['email'];
// $inhalt = $_POST['inhalt'];
$inhalte = $_POST;
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
        </table>

        <table>
        <?php foreach($inhalte as $key => $value): ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $value; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>


    </body>
</html>
