<?php

require 'database.php';
$query = "SELECT * FROM register";
$result = mysqli_query($conn, $query);
?>

<html>
    <head>
        <title>
            details
        </title>
        <style>
            body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}



.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
    box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 8em;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { 
    color: #FB667A; 
}

.container tr:hover {
    background-color: #464A52;
    box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
    background-color: #f2ee81;
    color: #403E10;
    font-weight: bold;
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    transform: translate3d(2px, -2px, 0);
    transition-duration: 0.4s;
    transition-property: all;
    transition-timing-function: line;
}
.button {
            padding: 12px 20px;
            font-size: 15px;
            border-radius: 0.5em;
            background: #014874;
            border: 1.5px solid #e8e8e8;
            transition: all .3s;
            box-shadow: 5px 5px 8px 0px rgba(255, 255, 255, 0.75);
            margin-top: 13px;
            margin-left:90%;
            cursor: pointer;
        }
        
        .button:hover {
            border: 1px solid white;
        }
        
        .button:active {
            box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #ffffff;
        }

/* @media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
} */
        </style>
    </head>
    <body>
        <a href="logout.php"><button class="button" name="logout" style="color: white;">Logout</button></a>
        <table class="container">
            <thead>
				<tr>
					<th>ID</th>
					<th>User Name</th>
                    <th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) 
                { 
                    ?>
                    <tr>	
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['emailid']; ?></td>		
					</tr>
					<?php 
                } ?>
				</tbody>
        </table>
    <body>
</html>