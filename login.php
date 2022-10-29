<?php include('database.php');?>

<!DOCTYPE html>

<head>
    <title>Login</title>
    <script src="https://use.fontawesome.com/cccd8a047c.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #ecf0f3;
        }
        
        .home {
            font-family: sans-serif;
            font-weight: 700;
            display: flex;
            justify-content: center;
            color: #555;
            background-color: #ecf0f3;
        }
        
        .login-div {
            width: 430px;
            height: 500px;
            padding: 60px 35px 35px 35px;
            border-radius: 40px;
            background-color: #ecf0f3;
            box-shadow: 13px 13px 20px #50aee5, -13px -13px 20px #fff;
            margin-top: 20px;
        }
        
        .title {
            text-align: center;
            font-size: 28px;
            letter-spacing: 0.5;
        }
        
        .sub-title {
            text-align: center;
            font-size: 15px;
            padding-top: 7px;
            letter-spacing: 3px;
        }
        
        .fields {
            width: 100%;
            padding: 35px 5px 5px 5px;
        }
        
        .fields input {
            border: none;
            outline: none;
            background: none;
            font-size: 18px;
            color: rgba(170, 39, 39, 0.856);
            padding: 20px 10px 20px 5px;
        }
        
        .username,
        .password {
            margin-bottom: 30px;
            border-radius: 25px;
            box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
            padding-left: 10px;
        }
        
        .signin-button {
            outline: none;
            border: none;
            width: 100%;
            height: 60px;
            border-radius: 30px;
            font-size: 20px;
            font-weight: 700;
            font-family: sans-serif;
            color: #fff;
            text-align: center;
            background-color: #02c8c8;
            box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #b1b1b1, -3px -3px 8px #ffff;
            transition: all 0.5s;
            cursor: pointer;
        }
        
        .signin-button:hover {
            background-color: #50aee5;
        }
        
        .signin-button:active {
            background-color: #50e5b9;
        }
        
        .link {
            padding-top: 20px;
            text-align: center;
        }
        
        .link a {
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-size: 15px;
        }
        
        .fa {
            color: #50aee5;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <a href="home.php"><i class="fa fa-home " aria-hidden="true"><span style="color: #0e7053; font-size: 23px;">Home</span></i></a>
    <form action = "include-login.php" method = "POST"> 
        <div class="home">
            <div class="login-div">
                <div class="title">User-Login</div>
                <div class="fields">
                    <div class="username">
                        <input type="username" name="username" class="user-input" placeholder="Username" />
                    </div>
                    <div class="password">
                        <input type="password" name="password" class="pass-input" placeholder="Password" />
                    </div>
                    <button class="signin-button" name="login">login</button>
                    <div class="link">
                        <a href="#">Forgot password? </a> or <a href="signup.php"> Sign Up</a><br>
                        <a href="admin login.php"> Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>