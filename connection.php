<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "ecom";
/*  $host = "localhost"; 
$user = "id2641587_vyapari"; 
$pass = "password#1"; 
$db = "id2641587_ecom";  */ 
$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn,$db);
?>

