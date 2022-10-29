<!DOCTYPE html>
<html>
    <title>topic</title>

<head>
    <style>
        body {
            font-family: sans-serif;
        }
        
        .ul1 {
            background-color: rgb(149, 208, 214);
            border-radius: 10px;
        }
        
        li {
            float: left;
        }
        
        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 15px;
        }
        
        li a:hover {
            background-color: rgb(107, 219, 231);
        }
        
        .disk {
            margin-left: 800px;
            color: white;
            font-size: 20px;
            margin-top: 10px;
        }
        
        .heading {
            border: 1px solid black;
            width: 100%;
            text-align: justify;
            margin-top: 30px;
            margin-left: 60px;
            border-radius: 10px;
            width: 1100px;
            padding-right: 10px;
            padding-left: 10px;
            box-shadow: 9px -5px 19px -5px rgba(0, 0, 0, 0.75);
            background-color: rgb(222, 229, 230);
            ;
        }
        
        .main {
            border: 1px solid black;
            margin-top: 15px;
            padding-bottom: 15px;
            border-radius: 15px;
            box-shadow: 0px -3px 19px 3px rgba(17, 81, 134, 0.75);
            background-color: rgb(222, 239, 241);
        }
        
        ul {
            margin-left: 40%;

            list-style-type: none;
            overflow: hidden;
        }
        
        a {
            text-decoration: none;
            color: black;
        }
        
        .button {
            color: #090909;
            padding: 12px 20px;
            font-size: 15px;
            border-radius: 0.5em;
            background: rgb(188, 231, 224);
            border: 1.5px solid #e8e8e8;
            transition: all .3s;
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
            width: 50px;
            cursor: pointer;
        }
        
        .button:hover {
            border: 1px solid white;
        }
        
        .button:active {
            box-shadow: 4px 4px 12px #5a5959, -4px -4px 12px #ffffff;
        }
    </style>
</head>

<body>
    <div class="ul1">
        <ul>
            <li><a class="active" href="home.php"><strong>Home</strong></a></li>
            <!-- <li><a href="login.php">Login</a></li> -->
            <!-- <li><a href="signup.php">SignUp</a></li> -->
            <li><a href="info.php"><strong>About</strong></a></li>
        </ul>
    </div>
    <div class=" main ">
        <div class="heading ">
            <p>Disk scheduling is done by operating systems to schedule I/O requests arriving for the disk. Disk scheduling is also known as I/O scheduling. Disk scheduling is important because: Multiple I/O requests may arrive by different processes and
                only one I/O request can be served at a time by the disk controller.</p>
        </div><br><br><br>
        <div style="display: flex; ">
            <div style="margin-left: 120px; ">
                <div style="border: 1px solid black; width: 150%; height:350px; text-align: center; border-radius: 10px; box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236); ">
                    <h2>First come first serve</h2>
                    <img src="./image/fcfs.png " style="height: 200px; width: 300px; "><br><br>
                    <a href="fcfs.php "><input type="submit " class="button " value="DEMO "><br></a>
                </div><br><br><br>
                <div style="border: 1px solid black; width: 150%; height:350px; text-align: center; border-radius: 10px;box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236) ">
                    <h2>Circular-Scan </h2>
                    <img src="image/C-SCAN.png " style="height: 200px;width: 300px "><br><br>
                    <a href="c-scan.php "><input type="submit " class="button " value="DEMO "><br></a>
                </div><br><br><br>
                <!-- <div style="border: 1px solid black; width: 150%; height:350px; text-align: center; border-radius: 10px;box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236) ">
                    <h2>Scan</h2>
                    <img src="image/SCAN.png " style="height: 200px;width: 300px "><br><br>
                    <a href="scan.php"><input type="submit " class="button " value="DEMO "><br></a>
                </div> -->
            </div>
            <div style=" margin-left: 230px; ">
                <div style="border: 1px solid black; width: 160%; height:350px; text-align: center; border-radius: 10px; box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236) ">
                    <h2>Shortest seek time first</h2>
                    <img src="image/SSTF.png " style="height: 200px; width: 300px "><br><br>
                    <a href="sstf.php "><input type="submit " class="button " value="DEMO "><br></a>
                </div><br><br><br>
                <div style="border: 1px solid black; width: 160%; height:350px; text-align: center; border-radius: 10px; box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236) ">
                    <h2>Circular-Look</h2>
                    <img src="image/c-Look.png " style="height: 200px;width: 300px "><br><br>
                    <a href="c-look.php "><input type="submit " class="button " value="DEMO "><br></a>
                </div><br><br><br>
                <!-- <div style="border: 1px solid black; width: 160%; height:350px; text-align: center; border-radius: 10px; box-shadow: 2px 1px 24px 6px rgba(0, 0, 0, 0.75); background-color: rgb(206, 216, 236) ">
                    <h2>Look</h2>
                    <img src="image/look.png " style="height: 200px;width: 300px "><br><br>
                    <a href="look.php"><input type="submit " class="button " value="DEMO "><br></a>
                </div><br><br> -->
            </div>
        </div>
    </div>
</body>

</html>