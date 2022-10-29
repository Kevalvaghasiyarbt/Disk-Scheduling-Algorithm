<?php 

require_once('database.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $pwd = $password; 
        $query = "SELECT * FROM admin where username='$username' AND password='$pwd' LIMIT 1";
        $result=mysqli_query($conn, $query); 

        if(mysqli_num_rows($result)==1){ 
            $_SESSION['username'] = $username; 
            $_SESSION['success'] = "You are logged in"; 
            header('location: admin_dash.php?success=logged');
            exit();
        } else { 
           
            echo " <script>alert('username or password is wrong'),setInterval(document.location.href='admin login.php',200)
            </script>";
          
            // header("Location: login.php?error=wrongusernameorpassword");
        } 
} ?>