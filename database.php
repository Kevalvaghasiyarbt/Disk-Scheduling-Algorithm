<?php 

session_start();

$dbHost = "localhost";  
$dbUser = "root";  
$dbPass = "";  
$dbName = "disk";  


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);  

if (!$conn){   
    die("Database connection failed!");
} 
?>