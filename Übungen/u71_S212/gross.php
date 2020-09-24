<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="eingabe">
    <input type="submit" name="sub">
</form>

<?php
if(isset(&POST['sub'])) {
  $text = strtoupper($_POST['eingabe']);
  echo $text;
}
