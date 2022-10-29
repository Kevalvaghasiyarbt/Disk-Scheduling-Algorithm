<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://use.fontawesome.com/cccd8a047c.js"></script>
    <title>INFO</title>
    <style>
        body {
            font-family: sans-serif;
        }
        
        .info {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        
        p {
            margin-left: 65px;
            font-family: sans-serif;
            align-items: center;
        }
        
        .abc {
            background-color: rgb(148, 201, 247);
            margin-left: 20px;
            width: 280px;
            border-radius: 25px;
            box-shadow: -7px 0px 20px 3px rgba(0, 0, 0, 0.75);
        }
        
        img {
            margin-left: 15px;
            margin-top: 10px;
        }
        
        .abc:hover {
            animation: push 0.3s linear 1;
        }
        
        @keyframes push {
            50% {
                transform: scale(0.8);
            }
        }
        
        .fa {
            color: #50aee5;
            font-size: 30px;
            margin-left: 20px;
            margin-top: 10px;
        }
        
        .xyz {
            border: 1px solid black;
            border-radius: 15px;
            box-shadow: -7px 0px 20px 3px rgba(0, 0, 0, 0.75);
            height: 600px;
            color: #005f96;
        }
    </style>
</head>

<body>
    <div class="xyz">
        <a href="home.php"><i class="fa fa-home " aria-hidden="true"><span style="color: #0e7053; font-size: 23px;">Home</span></i></a>
        <h1 style="text-align: center;color: #50aee5; font-family: sans-serif; ">About Us</h1>
        <div class="info">
            <div class="abc">
                <div>
                    <img src="image/puja.jpeg" alt="" height="260px" width="250px" style="border-radius: 15px;">
                    <p>Pooja R D <br> PES1PG21CA057<br> Balsamiq and CSS </p>
                </div>
            </div>
            <div class="abc ">
                <div>
                    <img src="image/tejas.jpeg " alt=" " height="260px " width="250px " style="border-radius: 15px;">
                    <p>Tejas P Srivasta <br> PES1PG21CA093 <br> HTML and CSS</p>
                </div>
            </div>
            <div class=" abc ">
                <div>
                    <img src="image/kevalnew.jpg" alt=" " height="260px " width="250px " style="border-radius: 15px;">
                    <p>Keval Vaghasiya <br> PES1PG21CA096 <br> CSS, javascript and PHP</p>
                </div>
            </div>
            <div class=" abc ">
                <div>
                    <img src="image/ram.jpeg " alt=" " height="260px " width="250px " style="border-radius: 15px;">
                    <p>Ramkumar H R <br> PES1PG21CA065 <br>Balsamiq, HTML and PHP</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>