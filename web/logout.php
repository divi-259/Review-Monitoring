<?php
session_start();
$_SESSION['logged_in']=0;

 unset($_SESSION['logged_in']);  
 unset($_SESSION['user']);  
      session_destroy();
header("Location:/web/login.php");

?>