<?php

function cleaner($data) {


    if(is_array($data)) {
        foreach($data as $k => $v) {
          $securd[$k] = cleaner($v); //oder 
          //$securd[$k] = htmlspecialchars(trim($v), ENT_QUOTES);
        }

    } else {
      $secured = htmlspecialchars(trim($data), ENT_QUOTES);
    }

    return $secured;
}

$sec = cleaner('<a href="#">Test</a>');
echo $sec;
