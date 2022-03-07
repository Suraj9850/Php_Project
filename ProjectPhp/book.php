<?php
    include("head.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Document</title>
    <script>
        function seatNum() 
        {
            let fare=<?php echo $_REQUEST['fare']; ?>;
            document.getElementById("passenger").innerHTML="";
            let seat = document.getElementById("seat1").value;
            if (seat > 6) 
            {
                alert("Only 6 seat can book at one time...");
                document.getElementById("am").value="";
            }
            else {
                for (let i = 1; i <= seat; i++) {
                    document.getElementById("passenger").innerHTML += '<label>Passenger name ' + i + ' :<input type="text" name="p'+ i +'" required> <label>age:</label> <input type="number" name="age'+ i +'" required><label>Gemnder:</label>MALE<input type="radio" name="gen'+i+'" value="MALE">FEMALE<input type="radio" name="gen'+i+'" value="FEMALE">';
                }
                document.getElementById("am").value=fare*seat;
            }
        }
        
    </script>

</head>

<body>
    <div class="container">
    <form action="#"  method="post">
        <label>Booking id:</label><input type="number" disabled name="bid" id="id">
        
        <label>Seat:</label><input type="number" max=6 name="seat" id="seat1" onchange="seatNum()">
        
        <div id="passenger"></div>
        
        <label>Amount:</label><input type="number" disabled name="amt" id="am"><br><br>
        
        <input type="submit" name="btn"  value="BOOK">
    </form>
    </div>
</body>
</html>


<?php
    if(!isset($_SESSION['cust_id']))
    {
        header("location:destroy.php");
    }
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
            die("Could not connect".mysqli_connect_error());
    }

    $sql=mysqli_query($con,"select max(bookingid) as bid  from booking") or die(mysqli_error($con));
    $res=mysqli_fetch_array($sql);
    $count=$res['bid']+1; 

    if(empty($_POST['p1']))
    {
        echo '<script>
                alert("Enter The Seat");
             </script>';
    } 
    
    if(isset($_POST['btn']) and !empty($_POST['p1']))
    {
        
        $bid=$_REQUEST['busid'];
        $cid=$_SESSION['cust_id'];
        $brid=$_REQUEST['busroute'];
        $fare=$_REQUEST['fare'];
        $avilable=$_REQUEST['avi'];
        
        $n=$_POST['seat'];

        $date=$_REQUEST['date'];
        $bus_seat=$_REQUEST['tseat'];

        $_SESSION['brid']=$brid;
        $_SESSION['bid']=$count;

       
        for($i=1;$i<=$n;$i++)
        {
            //for get max pessanger id
            $sql=mysqli_query($con,"select max(pid) as pid  from passenger") or die(mysqli_error($con));
            $res=mysqli_fetch_array($sql);

            //for get max avaliable seat
            $sql1=mysqli_query($con,"select *  from bus_route where busrouteid=$brid") or die(mysqli_error($con));
            $res1=mysqli_fetch_array($sql1);

            
            $pid=$res['pid']+1;
            $pname=$_POST['p'.$i];
            $age=$_POST['age'.$i];
            $gen=$_POST['gen'.$i];
            if($avilable <= 0)
            {
?>
                <script>    
                    alert("Sorry seat is not avilabale...");
                    location.href="h.php";
                </script>
<?php
                exit();         
            }
            
            $av=$avilable-1;
            $avilable=$avilable-1;
            
            //getting seat no
            $seat=$bus_seat-$av;
       

            
            $sql=mysqli_query($con,"INSERT INTO `passenger` ( `pid`,`pname`, `age`, `gender`,`seat_no`, `cust_id`,`bookingid`) VALUES ($pid,'$pname',$age,'$gen',$seat,$cid,$count)") or die(mysqli_error($con));
        }


        $amt=$fare*$n;

        $sql1=mysqli_query($con,"INSERT INTO `booking` (`bookingid`,`busrouteid`,`cust_id`, `seats`, `amount`, `bdate`,`jdate`) VALUES ($count,$brid,$cid,$n,$amt,curdate(),'$date')") or die(mysqli_error($con));
        if($sql1)
        {
?>
            <script>    
                location.href="ticket.php";
            </script>
<?php
        }
        ?>
    <script>    
        document.getElementById("seat1").value="<?php echo $n;?>";
    </script>
<?php
}
    
?>

    <script>    
        document.getElementById("id").value="<?php echo $count;?>";
    </script>
