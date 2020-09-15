<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formular</title>
  </head>
  <body>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="eingabefeld">
        <input type="submit" name="eingabefeldSubmit">
        
      </form>

  </body>
</html>

<?php
//var_dump($_REQUEST); // = POST + GET
//var_dump($_POST); // sendet die information in intity body
//var_dump($_GET); // liefert die input informattion über url
