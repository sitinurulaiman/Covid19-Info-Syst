<?php
require('connection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM register WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: mstaff_list.php"); 
?>

