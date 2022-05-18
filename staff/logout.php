<?php
session_start();

  unset($_SESSION['maxdeal_staff']);
  
header("location:login.php");
?>