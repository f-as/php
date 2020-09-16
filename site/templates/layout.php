<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?= INFO['charset']; ?>">
         <title><?= INFO['title']; ?></title>
  </head>
  <body>
      <nav>
          <ul>
              <li><a href="index.php?nav=1">seite 1</a></li>
              <li><a href="index.php?nav=2">seite 2</a></li>
              <li><a href="index.php?nav=3">seite 3</a></li>
              <li><a href="index.php?nav=4">seite 4</a></li>
              <li><a href="index.php?nav=5">seite 5</a></li>
          </ul>
      </nav>

      <h1><?= sageHallo('Besucher'); ?></h1>

      <main>
        <?php require($template); ?>
      </main>
  </body>
</html>
