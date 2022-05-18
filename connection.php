<?php
header('X-Frame-Options: DENY'); 
@ob_start();
session_start();
error_reporting(0);
$con=mysqli_connect('localhost','root','root', 'filter_system');   
$pkg_amount=100;
$company_name = "Filter System";
?>
