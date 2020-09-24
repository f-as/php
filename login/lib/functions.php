<?php

function checkLogin() {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $resault = false;

  if($username == USER['name'] && $password == USER['password']) {
      $resault = true;
  }

  return $resault;
}
