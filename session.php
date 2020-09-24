<?php
session_start();

if(!isset($_POST['infoSubmit'])) {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
  <input type="text" name ="info">
  <input type="submit" name="infoSubmit">
</form>

<?php
} else {
    echo $_POST['info'];
    $_SESSION['info'] = $_POST['info'];
    //************expire date ****************** timer for information deletion+++++++++

  /*  $maxSESSION = 20;
    $time = time();
    $timeout = $time + $maxSESSION;
    $SESSION['timeout'] = $timeout;
  */

}

if(isset($_SESSION['info'])){
    echo $_SESSION['info'];
    //$_SESSION = array(); // um die gesamte Session zu löschen
    //$SESSION = [];  // um die gesamte Session zu löschen
    unset($_SESSION['info']);   // um die gesamte Session zu löschen
    //session_destroy();   // um die gesamte Session zu löschen

//***expire date ****************** timer for information deletion++++
  //  if (time() >= $_SESSION['timeout']) {
 //    $_SESSION = [];

          header('location: session.php');
          exit;
    }

}
 ?>
