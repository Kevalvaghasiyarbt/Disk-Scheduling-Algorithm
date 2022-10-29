<?php 
require_once('database.php');

if (isset($_POST['submit'])) {  
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

        $pwd = $password; 
        $query = "INSERT INTO register (username, emailid, password) 
        VALUES ('$username', '$email' , '$pwd')";
        
        
        mysqli_query($conn, $query);  
         $query="CREATE TABLE `$username`(
               data INT(10) 
           )";
        
           
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have been registered";  
        header('location: login.php?registrationsuccess');   
        
        mysqli_close($conn); 
}
?>