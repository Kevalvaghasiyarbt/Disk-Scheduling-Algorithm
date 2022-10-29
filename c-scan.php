<!DOCTYPE html>
<html lang="en">

<head>
    <title>C-SCAN</title>
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
        }
        
        #scan {
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
            margin-left: 100px;
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
    <div style="display: block;">
        <h1 style="text-align: center;">C-SCAN</h1>
    </div>
    <div class="shadow">
        <div class="container">
            <p id="scan"> In SCAN algorithm, the disk arm again scans the path that has been scanned, after reversing its direction. So, it may be possible that too many requests are waiting at the other end or there may be zero or few requests pending at the scanned
                area. These situations are avoided in CSCAN algorithm in which the disk arm instead of reversing its direction goes to the other end of the disk and starts servicing the requests from there. So, the disk arm moves in a circular fashion
                and this algorithm is also similar to SCAN algorithm and hence it is known as C-SCAN (Circular SCAN).</p>
            <div style="display:flex;">
                <ul style="margin-left:60px;">
                    <h3>Advantages:</h3>
                    <li>C-SCAN Algorithm is the successor and the improved version
                        <br>of the SCAN scheduling Algorithm</li>
                    <li>Uniform waiting time is provided</li>
                    <li>Better response time is provided</li>
                </ul>
                <ul class="Disadvantages">
                    <h3>Disadvantages:</h3>
                    <li>More seek movements are caused in C-SCAN compared to
                        <br> Algorithm.</li>
                    <li>In C-SCAN even if there are no requests left to be serviced the Head <br> will still travel to the end of the disk unlike SCAN algorithm.</li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        &nbsp;&nbsp; <input type="text" id="text1" placeholder="Enter order of request sequence : "></input>

        &nbsp; <input type="button" class="button" id="button1" value="Add" onclick="add_element_to_array()"></input>
        &nbsp;<input type="button" class="button" id="button2" value="Remove" onclick="remove_array()"></input><br> <br> &nbsp;&nbsp;
        <input type="text" id="text2" placeholder="Enter read/write head  position : "></input> &nbsp;&nbsp;
        <input type="submit" class="button" value="SUBMIT IT" onclick="myfun();" id="continue">
        <p id="t2"></p>

    </div>
    <div id="chartContainer" style="max-width: 920px; margin: 0px auto; margin-left:40%;"></div>
    <script>
        var x = 0,
            p = 1;

        var array1 = Array();
        var q = document.createElement("table");
        q.setAttribute("id", "mytable");
        q.style = "position:absolute; top:630px; left:150px;"
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
        });
        chart.render();

        function add_element_to_array() {
            array1[x] = document.getElementById("text1").value;

            var row = q.insertRow(-1);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            cell1.innerHTML = "Sector : " + p;
            cell2.innerHTML = array1[x];
            document.body.appendChild(q);

            x++;
            p++;
            document.getElementById("text1").value = " ";
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
            var head = document.getElementById('text2').value;
            var seek = 0;
            var dis, cur;
            var left = [];
            var right = [];
            var seq = [];
            for (var i = 0; i < array.length; i++) {
                if (array[i] < head) {
                    left.push(array[i]);
                }
                if (array[i] > head) {
                    right.push(array[i]);
                }
            }
            left.sort(function(a, b) {
                return (a - b)
            });
            right.sort(function(a, b) {
                return (a - b)
            });
            console.log(left);
            console.log(right);
            seek = seek + Math.abs(199 - head);
            seek = seek + 199;

            var count = 0;
            addPoint(head, count);
            count++;
            for (var i = 0; i < right.length; i++) {
                cur = right[i];
                addPoint(cur, count);
                count++;
                seq.push(cur);
                head = cur;
            }
            addPoint(199, count);
            count++;
            cur = 0;
            addPoint(cur, count);
            count++;
            seq.push(cur);
            seek = seek + Math.abs(left[left.length - 1] - cur);
            for (var i = 0; i < left.length; i++) {
                cur = left[i];
                addPoint(cur, count);
                count++;
                seq.push(cur);
                head = cur;
            }
            document.getElementById("t2").innerHTML = "The number of movement for C-SCAN =" + seek;
            console.log(seq);
        }
    </script>
</body>

</html>