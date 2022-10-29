<!DOCTYPE html>
<html lang="en">

<head>
    <title>SSTF</title>
    <script src="./add_point.js"></script>
    <script src="https://use.fontawesome.com/cccd8a047c.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: sans-serif;
        }
        
        input[type=text] {
            width: 250px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            border-radius: 15px;
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
            cursor: pointer;
        }
        
        .button:hover {
            border: 1px solid white;
        }
        
        .button:active {
            box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #ffffff;
        }
        
        table {
            border: 1px solid black;
            height: 50px;
            border-radius: 10px;
            padding: 3px;
            width: 200px;
            background-color: rgb(188, 231, 224);
            border-color: rgb(74, 177, 160);
        }
        
        td,
        th {
            border: 1px solid black;
            border-color: rgb(74, 177, 160);
            margin: 5px;
        }
        
        #sstf {
            border: 2px solid black;
            padding: 10px;
            border-radius: 20px;
            width: 90%;
            margin-left: 50px;
        }
        
        .shadow {
            box-shadow: 3px 4px 40px -3px rgba(102, 89, 102, 1);
            background-color: rgb(188, 231, 224);
            padding-top: 30px;
            border-radius: 15px;
        }
        
        .Disadvantages {
            border-left: 3px solid black;
            margin-left: 250px;
            padding-left: 50px;
        }
        
        .fa {
            color: #50aee5;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <a href="home.php"><i class="fa fa-home " aria-hidden="true"><span style="color: #0e7053; font-size: 23px;">Home</span></i></a>
    <div style="display: block; color: rgb(74, 177, 160);">
        <h1 style="text-align: center;">SHORTEST SEEK TIME FIRST</h1>
    </div>
    <div class="shadow">
        <div class="container">
            <p id="sstf">In SSTF (Shortest Seek Time First), requests having shortest seek time are executed first. So, the seek time of every request is calculated in advance in the queue and then they are scheduled according to their calculated seek time. As a result,
                the request near the disk arm will get executed first. SSTF is certainly an improvement over FCFS as it decreases the average response time and increases the throughput of system</p>
            <div style="display:flex;">
                <ul style="margin-left:100px;">
                    <h3>Advantages:</h3>
                    <li>Average Response Time decreases</li>
                    <li>Throughput increases</li>
                </ul>
                <ul class="Disadvantages">
                    <h3>Disadvantages:</h3>
                    <li>Overhead to calculate seek time in advance</li>
                    <li>Can cause Starvation for a request if it has higher seek time as compared to incoming requests</li>
                    <li>High variance of response time as SSTF favours only some requests</li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">&nbsp; &nbsp;
        <input type="text" id="text1" placeholder="Enter order of request sequence : "></input>&nbsp; &nbsp;
        <input type="button" class="button" id="button1" value="Add" onclick="add_element_to_array()"></input>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" class="button" id="button2" value="Remove" onclick="remove_array()"></input><br><br>&nbsp; &nbsp;
        <input type="text" id="text2" placeholder="Enter read/write head  position : "></input>&nbsp; &nbsp;
        <input type="submit" class="button" value="SUBMIT IT" onclick="myfun();" id="continue">
        <p id="t2"></p>
    </div>
    <div id="chartContainer" style=" max-width: 920px; margin: 0px auto;margin-left:40%;"></div>
    <script>
        var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Adding & Updating dataPoints"
                },
                axisX2: {
                    title: "Secondary X Axis",
                },
                axisY: {
                    reversed: true
                },
                data: [{
                    axisXType: "secondary",
                    type: "line",
                    dataPoints: []
                }],
                animationEnabled: false,
                animationDuration: 2000
            }

        );
        chart.render();
        var x = 0,
            p = 1;
        var array1 = Array();
        var q = document.createElement("table");
        q.setAttribute("id", "mytable");
        q.style = "position:absolute; top:630px; left:150px;"

        function add_element_to_array() {
            array1[x] = document.getElementById("text1").value;
            var row = q.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            cell1.innerHTML = "Sector :" + p;
            cell2.innerHTML = array1[x];
            document.body.appendChild(q);
            x++;
            p++;
            document.getElementById("text1").value = "";
        }

        function remove_array() {
            array1.pop();
            var x = document.getElementById("mytable").rows.length;
            document.getElementById("mytable").deleteRow(x - 1);
            console.log(array1);
            p--;
        }

        function myfun() {
            console.log(array1);
            const array = array1.map((i) => Number(i));
            console.log(array);
            var i,
                n,
                k,
                mov = 0,
                cp,
                min,
                j = 0,
                mini,
                cp1;
            var req = [];
            var index = [];
            var a = [];
            cp = document.getElementById('text2').value;
            cp1 = cp;
            addPoint(cp1, 0);
            console.log(cp);
            for (k = 0; k < array.length; k++) {
                for (i = 0; i < array.length; i++) {
                    index[i] = Math.abs(cp - array[i]);
                }
                min = index[0];
                mini = 0;
                for (i = 1; i < array.length; i++) {
                    if (min > index[i]) {
                        min = index[i];
                        mini = i;
                    }
                }
                a[j] = array[mini];
                addPoint(a[j], k + 1);
                j++;
                cp = array[mini];
                array[mini] = 999;
            }
            console.log(mov);
            mov = mov + Math.abs(cp1 - a[0]);
            for (i = 1; i < array.length; i++) {
                mov = mov + Math.abs(a[i] - a[i - 1]);
            }
            console.log(a);
            document.getElementById("t2").innerHTML = "The number of movement is =" + mov;
        }
    </script>
</body>

</html>