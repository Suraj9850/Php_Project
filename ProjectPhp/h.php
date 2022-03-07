<?php
include("head.php");
     $con=mysqli_connect("localhost","root","","busbooking");
     if(!$con)
     {
             die("Could not connect".mysqli_connect_error($con));
     }
     if($check==true)
     {
       
     }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/table.css">
    <title>Document</title>
    <style>
        select
        {
            width: 48%;
            float: left;
        }
        #sel
        {
            margin-left: 4%;
        }
        label
        {
            color: black;
        }
    </style>
    <script>
        function getdes(src) 
        {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function ()
            {
                if (this.readyState == 4 && this.status == 200) 
                {
                    document.getElementById("sel").innerHTML = this.responseText;
                }
            }
            xhr.open("POST", "des.php?src="+src, true);
            xhr.send();
        }
    </script>
</head>

<body>

    <div class="container">
        <form action="#" method="post">
            <select onchange="getdes(this.value)" name="src">
                <option disabled   selected  > Select Source</option>
                <?php 
            $sql=mysqli_query($con,"Select DISTINCT source from bus_route") or die(mysqli_error($con));
    
            while($r=mysqli_fetch_array($sql))
            {
                   echo '<option name="name">'.$r['source'].'</option>';
            }
        ?>
            </select>
            <select name="des" id="sel">
                <option selected disabled>Select Destination</option>
            </select>
            <br><label>Date:</label><input type="date" id="d" name="date"> <br><br>
            <input type="submit" name="btn" value="SEARCH">

        </form>
    </div>

</body>


<?php
    if(isset($_POST['btn']))
    {
       
        $d=$_POST['date'];
        $des=$_POST['des'];
        $src=$_POST['src'];

        if(!empty($des) and !empty($des) and !empty($d))
        {
            
            if($src != "Souce" and $des != "Destination")
            {
                
                //this code is old code here some lohical errors
                // $sql=mysqli_query($con," SELECT SUM(seat) from bus,booking,bus_route where bus_route.busrouteid=booking.busrouteid and bus.bus_no=bus_route.bus_no and bdate='$bdate' and booking.busrouteid=$data['busrouteid]' ") or die(mysqli_error($con));
                
                //This is for data
                $sql=mysqli_query($con," SELECT * FROM `bus_route`,bus WHERE bus_route.bus_no = bus.bus_no and `destination` ='$des' and  source='$src' ") or die(mysqli_error($con));

                

                if(mysqli_affected_rows($con) == 0)
                {
                    echo "Bus Not Avilable";
                }
                else

                {       
                     echo '
                     <div class="container">
                     <center>
                     <h2 name="head" id="h2">Available Buses '.$src.' To '.$des.'</h2>
                     <table border="2">
                        <tr>
                            <th>Bus Name</th>
                            <th>Arrival Time</th>
                            <th>Departur Time</th>
                            <th>Available Seat</th>
                            <th>Type</th>
                            <th>Fare</th>
                            <th>Book</th>
                        </tr>';
                        while($res=mysqli_fetch_assoc($sql))
                        {
                            if($res['source'] == $src and $res['destination'] == $des)
                            {

                                
                                $sql1=mysqli_query($con," SELECT SUM(seats) from bus,booking,bus_route where bus_route.busrouteid=booking.busrouteid and bus.bus_no=bus_route.bus_no and jdate='$d' and booking.busrouteid=".$res['busrouteid']." ") or die(mysqli_error($con));

                                $dt=mysqli_fetch_row($sql1);

                                $availabel=$res['seat']-$dt[0];


                                    echo '<tr name="1t">
                                    <td>'.$res['busname'].'</td>
                                    <td>'.$res['arrival_time'].'</td>
                                    <td>'.$res['departure_time'].'</td>
                                    <td>'. $availabel.'</td>
                                    <td>'. $res['type'].'</td>
                                    <td>'.$res['fare'].'</td>
                                    
                                    <td><a href="book.php?busid='.$res['bus_no'].'&busroute='.$res['busrouteid'].'&avi='. $availabel.'&fare='.$res['fare'].'&tseat='.$res['seat'].'&date='.$d.' ">Book</a>
                                   </td>
                                </tr>';
                            }
                        }
                    } 
                    echo ' </table>
                    </center>
                    </div>'; 
                }
        }
        else{
            echo '<script>
                    alert("Enter Bus Data");
                 </script>';
        }
    }
    mysqli_close($con);
?>


<div class="container">
    <?php include_once "footer.html" ?>
</div>
</html>
    
<script>
        
    var today=new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min',today);
    
</script>