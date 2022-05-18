<?php
session_start();

  unset($_SESSION['maxdeal_admin']);
  
header("location:login.php");
?>