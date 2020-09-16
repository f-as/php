<?php

//while
$i = 0;
while ($i < 5) {
    echo ++$i;
  }
  echo '<hr>';

  // do-while
  do {
    echo $i;
  } while ($i > 10);
  echo '<hr>';
  // for

for($i = 0; $i <=10; $i++) {
    echo $i;
}
  echo '<hr>';

  //foreach
  $liste = ['Banane', 'Zitrone', 'Kiwi'];
  foreach ($liste as $e) {
      echo 'Diese'. $e . 'ist ja soooo lecker!<br>';
  }
