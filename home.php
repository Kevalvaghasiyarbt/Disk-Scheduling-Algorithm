<?php
session_start();
?>
<!DOCTYPE html>
<html>
<script src="https://use.fontawesome.com/cccd8a047c.js"></script>
<head>
    <title>Home page</title>
    <style>
        body {
            display: flex;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background-color: #a2ebf8;
            justify-content: center;
            align-items: center;
            font-family: arial;
        }
        
        .container {
            width: 750px;
            margin-top: 0px;
            position: relative;
            background-color: #a2ebf8;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-left: 200px;
            margin-right: 250px;
        }
        
        .container .card {
            position: relative;
        }
        
        .container .card .face {
            width: 500px;
            height: 200px;
            transition: .4s;
        }
        
        .container .card .face.face1 {
            position: relative;
            background: rgb(59, 59, 59);
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
            margin-left: 140px;

        }
        
        .container .card:hover .card1 {
            transform: translateY(0);
            box-shadow: 0 0 50px #9e71e6;
            background-color: #9e71e6;
        }
        
        .container .card .face.face1 .content {
            opacity: .2;
            transition: 0.5s;
            text-align: center;
        }
        
        .container .card:hover .face.face1 .content {
            opacity: 1;
        }
        
        .container .card .face.face1 .content i {
            font-size: 3em;
            color: white;
            display: inline-block;
        }
        
        .container .card .face.face1 .content h3 {
            font-size: 1em;
            color: white;
            text-align: center;
        }
        
        .container .card .face.face1 .content a {
            transition: .5s;
        }
        
        .container .card .face.face2 {
            position: relative;
            background: rgb(255, 255, 255);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .8);
            transform: translateY(-100px);
            margin-left: 140px;
        }
        
        .container .card:hover .face.face2 {
            transform: translateY(0);
        }
        
        .container .card .face.face2 .content p,
        a {
            font-size: 10pt;
            margin: 0;
            line-height: 22px;
            text-decoration: none;
            padding: 0;
            color: rgb(9, 92, 170);
        }
        
        .container .card .face.face2 .content .btn {
            text-decoration: none;
            color: black;
            box-sizing: border-box;
            outline: 1px double rgb(0, 0, 0);
            padding: 10px;
            margin: 15px 0 0;
            display: inline-block;
        }
        
        .container .card .face.face2 .content .btn:hover {
            background: #333;
            color: whitesmoke;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);
        }
        
        .full {
            color: white;
            font-size: 20px;
            font-style: bold;
        }
        .user{
            margin-left: 35px;
            margin-top: 10px;
            font-family: arial;
            border-radius: 10px;
        }
        .button {
            padding: 12px 20px;
            font-size: 15px;
            border-radius: 0.5em;
            background: #014874;
            border: 1.5px solid #e8e8e8;
            transition: all .3s;
            box-shadow: 0px 0px 24px 0px rgba(255, 255, 255, 0.75);
            margin-top: 13px;
            margin-left:300%;
            cursor: pointer;
        }
        
        .button:hover {
            border: 1px solid white;
        }
        
        .button:active {
            box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #ffffff;
        }
        .fa {
            color: #014874;
            font-size: 30px;
            margin-top: 10px;
        }
        .disk1{
            margin-left:25%;
            color: #014874;
            font-family: 'Times New Roman';
        }
        .disk2{
            margin-left:32%;
            color: #014874;
            font-family: 'Times New Roman';
       
        }
    </style>
</head>

<body>
    <div style="display: block; color: rgb(255, 255, 255); height: 550px; border: 1px solid; border-radius: 25px; box-shadow: -7px 0px 20px 3px rgba(16, 123, 211, 0.75); border-left: auto;">
       <div style="display:flex;">

            <div class="user">
            <span style="color: #014874; font-size: 23px;">
                <?php
                if(isset($_SESSION['username'])) : ?>
                 <a href="home.php"><i class="fa fa-user-circle-o" aria-hidden="true"><span style="color: #0e7053; font-size: 23px;"></span></i></a>

                <?php echo $_SESSION['username'];?>
                <?php endif ?>
            </span>
            </div>
           
            <?php  if(isset($_SESSION['username'])) : ?>

                <div class="disk1">
                    <h1>Disk scheduling Algorithm's</h1>   
                </div>
            <?php endif ?>

            <?php  if(!isset($_SESSION['username'])) : ?>

                <div class="disk2">
                    <h1>Disk scheduling Algorithm's</h1>   
                </div>
            <?php endif ?>


            <div>
                
            <?php if(isset($_SESSION['username'])) : ?>
            <form action = "logout.php" method = "POST">
                    <button class="button" name="logout" style="color: white;">Logout</button>
                    
                    
                </form>
                <?php endif ?>
                <?php if(!isset($_SESSION['username'])) : ?>
            <form action = "login.php" method = "POST">
                    <button class="button" name="login" style="color: white;">Login</button>
                    
                    
                </form>
                <?php endif ?>
            </div>
        </div>
            <div class="container">
                <div class="card">
                    <div class="face face1 card1">
                        <div class="content">
                            <h3>Operating System</h3>
                            <a class="full" href="#">Disk scheduling Algorithm's </a><br>
                        </div>
                    </div>
                    <div class="face face2 ">
                        <div class="content ">
                            <a class="btn " href="topic.php" type="button ">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>