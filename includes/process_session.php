<?php
//start PHP session
  session_start();

//create a session variable
$_SESSION['loggedin']  = true;
$_SESSION['user']  = $username;

?>