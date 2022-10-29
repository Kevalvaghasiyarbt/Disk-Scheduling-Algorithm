<!DOCTYPE html>
<html lang="en">
    <head>
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
                /* color: #090909; */
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
            
            #look {
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
                margin-left: 50px;
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
            <h1 style="text-align: center;">Look</h1>
    
        </div>
        <div class="shadow">
            <div class="container">
                <p id="look">It is similar to the SCAN disk scheduling algorithm except for the difference that the disk arm in spite of going to the end of the disk goes only to the last request to be serviced in front of the head and then reverses its direction from there only. Thus it prevents the extra delay which occurred due to unnecessary traversal to the end of the disk.</p>
                <div style="display: flex;">
                    <ul style="margin-left: 100px;">
                        <h3>Advantages:</h3>
                        <li>Better performance is provided compared to SCAN Algorithm</li>
                        <li>Starvation is avoided in LOOK scheduling algorithm</li>
                        <li>Low variance is provided in waiting time and response time</li>  
                    </ul>
                    <ul class="Disadvantages">
                        <h3>Disadvantages:</h3>
                        <li>Overhead of finding the end requests is present</li>
                        <li>Cylinders which are just visited by Head have to wait for long time</li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            &nbsp;&nbsp; <input type="text" id="text1" placeholder="Enter order of request sequence : "></input>
            &nbsp; <input type="button" class="button" id="button1" value="Add" onclick="add_element_to_array()"></input>
            &nbsp;<input type="button" class="button" id="button2" value="Remove" onclick="remove_array()"></input><br> <br> &nbsp;&nbsp;
            <input type="text" id="text2" placeholder="Enter read/write head  position : "></input>&nbsp;&nbsp;
            <input type="submit" class="button" value="SUBMIT IT" onclick="myfun();" id="continue">
            <p id="t2"></p>
        </div>
        <br>
        <div id="chartContainer" style="max-width: 920px; margin: 0px auto; margin-left:40%;"></div>
        <script>
            var x = 0,p=1;
        
            var array1 = Array();
            var q=document.createElement("table");
            q.setAttribute("id","mytable");
            q.style = "position:absolute; top:730px; left:150px;"
            
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
            cell1.innerHTML = "Sector :"+ p;
            cell2.innerHTML = array1[x];
            document.body.appendChild(q);

                x++;
                p++;
                document.getElementById("text1").value =" ";
            }

            function remove_array()
                    {
                        array1.pop();
                        var x = document.getElementById("mytable").rows.length;
                        document.getElementById("mytable").deleteRow(x-1);
                        console.log(array1);
                        p--;
                    }

            function myfun() 
            {
                console.log(array1);

                const array = array1.map((i) => Number(i));
                console.log(array);

                var head = document.getElementById('text2').value;
                var direction = "right";
                var seek = 0,distance, cur;
                var left = [];
                var right = [];
                var sequence = [];
                for (var i = 0; i < array.length; i++) {
                    if (array[i] < head) {
                        left.push(array[i]);
                    }
                    if (array[i] > head) {
                        right.push(array[i]);
                    }
                }
                left.sort(function(a, b) {
                    return a - b;
                })
                console.log(left);
                right.sort(function(a, b) {
                    return a - b;
                })
                console.log(right);
                var run = 2;
                var count = 0;
                addPoint(head, count);
                count++;
                while (run--) {
                    if (direction == "left") {
                        for (var i = left.length - 1; i >= 0; i--) {
                            cur = left[i];

                            // appending current track to seek sequence 
                            sequence.push(cur);
                            addPoint(cur, count);
                            count++;
                            // calculate absolute distance 
                            distance = Math.abs(cur - head);

                            // increase the total count 
                            seek += distance;

                            // accessed track is now the new head 
                            head = cur;
                        }
                        // reversing the direction 
                        direction = "right";
                    } 
                    else if (direction == "right") {
                        for (var i = 0; i < right.length; i++) {
                            cur = right[i];
                            // appending current track to seek sequence 
                            sequence.push(cur);
                            addPoint(cur, count);
                            count++;

                            // calculate absolute distance 
                            distance = Math.abs(cur - head);

                            // increase the total count 
                            seek += distance;

                            // accessed track is now new head 
                            head = cur;
                        }
                        // reversing the direction 
                        direction = "left";
                    }
                }

                document.getElementById("t2").innerHTML = "the number of movement look is =" + seek;
            }

        </script>
        
    </body>
</html>