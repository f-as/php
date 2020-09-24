<?php

if(!isset($_POST['loginSub'])){
    // Formular wurde nict abgesendet

    require_once('templates/loginFormular.php');

} else {
    //Formular wurde abgesendet

      if(checkLogin()) {
          echo 'Login erfolgreich';
      } else {
          echo 'Login nicht erfolgreich';
      }


}
