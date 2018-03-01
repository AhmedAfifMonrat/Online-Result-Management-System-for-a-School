<?php
session_start();
$_SESSION['user']="loged out";
 header("location:check.php"); 
?>