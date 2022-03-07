<?php
    include("head.php");
    if(!isset($_SESSION['cust_id']))
    {
        header("location:destroy.php");
    }
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
        die("Could not connect".mysqli_error());
    }

    $cno=$_SESSION['cust_id'];

     //for get booking data
     $sql1=mysqli_query($con,"SELECT * from booking where cust_id=$cno ") or die(mysqli_error($con));   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="stylesheet" href="CSS/index.css">

    <title>Booking</title>
    <script>  
         book();
         function book()
         {
             
            document.getElementById("jdata").innerHTML='<?php echo '<table><tr><th>Booking id</th><th>Source</th><th>Destination</th><th>Arrvival time</th><th>Destination time</th><th>Seats</th><th>Fare</th><th>Journey date</th><th>Cancel ticket</th> <th>View ticket</th></tr>';
             if(mysqli_num_rows($sql1)==0)
             {
                 echo '<td  colspan=9><span style="color:RED">NO TICKETS BOOKED</span></td>';
             }
             while($res1=mysqli_fetch_assoc($sql1))
             {
                 $sql=mysqli_query($con,"SELECT * from bus_route where busrouteid=$res1[busrouteid]") or die(mysqli_error($con));
                 $res=mysqli_fetch_assoc($sql);

                 $date=date("Y-m-d");
                 if($res1['jdate']>$date)
                 {
                     echo '<tr><td>'.$res1['bookingid'].'</td><td>'.$res['source'].'</td><td>'.$res['destination'].'</td><td>'.$res['arrival_time'].'</td><td>'.$res['departure_time'].'</td><td>'.$res1['seats'].'</td><td>'.$res1['amount'].'</td><td>'.$res1['jdate'].'</td><td><a class="anch" href="cancel.php?bid='.$res1['bookingid'].'&fare='.$res1['amount'].'">Cancel Ticket</a></td><td><a class="anch" href="ticket2.php?bid='.$res1['bookingid'].'&brid='.$res1['busrouteid'].'">View Ticket</a></td></tr>';
                 }
             }
             echo '</table>';
             ?>';

        }
        function book2()
        {
            document.getElementById("jdata").innerHTML='<?php echo '<table><tr><th>Booking id</th><th>Source</th><th>Destination</th><th>Arrvival time</th><th>Destination time</th><th>Seats</th><th>Fare</th><th>Journey date</th><th>View ticket</th></tr>';

            $sql1=mysqli_query($con,"SELECT * from booking where cust_id=$cno ") or die(mysqli_error($con)); 

            if(mysqli_num_rows($sql1)==0)
            {
                echo '<td  colspan=9><span style="color:RED">NO TICKETS BOOKED</span></td>';
            }

            while($res1=mysqli_fetch_assoc($sql1))
            {
                $sql=mysqli_query($con,"SELECT * from bus_route where busrouteid=$res1[busrouteid]") or die(mysqli_error($con));
                $res=mysqli_fetch_assoc($sql);

                $date=date("Y-m-d");
                if($res1['jdate']<$date)
                {
                      echo '<tr><td>'.$res1['bookingid'].'</td><td>'.$res['source'].'</td><td>'.$res['destination'].'</td><td>'.$res['arrival_time'].'</td><td>'.$res['departure_time'].'</td><td>'.$res1['seats'].'</td><td>'.$res1['amount'].'</td><td>'.$res1['jdate'].'</td><td><a class="anch" href="ticket2.php?bid='.$res1['bookingid'].'&brid='.$res1['busrouteid'].'">View Ticket</a></td></tr>';
                } 
            }
             echo '</table>';
             ?>';
        }
    </script>
</head>

<body bgcolor="#3498DB">
    <center>
      
        <div class="container">
            <h2>Booked Tickets</h2>
            <input type="Button" id="bt" class="btn" onclick="book()" name="btn1" value="Upcoming Journey">

            <input type="Button" id="bt2" onclick="book2()" class="btn" name="btn2" value="Past Journey"><br>
        <div id="jdata"></div>
       
        
       </div>
      
       </center>
</body>

</html>

