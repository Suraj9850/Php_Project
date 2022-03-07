<?php
    include("head.php");
    if(!isset($_SESSION['uname'])=='admin')
    {
       header("location:destroy.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Document</title>

    <style>
    input[type="submit"]
    {
    background-color: rgb(26, 221, 130);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 24.32%;
    }  
    </style>
</head>
<body>

    <div class="container">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Bus no:</label><input type="text" id="bno1" name="bno" required>
    <label>Busname:</label><input type="text" id="bname1" name="bname">
    
    <label>Bus Type:</label>
    <select name="type" id="type">
        <option selected disabled>Select Bus Type</option>
        <option value="AC">AC</option>
        <option value="Non AC">Non AC</option>
    </select>

    <label>Seat:</label><input type="number" id="seat" name="seat">
    <br><br>

    <input type="submit" class="btn" name="in" value="Insert">
    <input type="submit" class="btn"  name="del" value="Delete">
    <input type="submit" class="btn" name="up" value="Update">
    <input type="submit" class="btn" name="se" value="Search">
</form>
</div>
</body>
</html>

<?php
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
        die("Could not connect".mysqli_connect_error($con));
    }

    if(isset($_POST['in']))
    {
        $bno=$_POST['bno'];
        $bname=$_POST['bname'];
        $seat=$_POST['seat'];
        $type=$_POST['type'];
        checkin($bno,$bname,$seat,$type);

        $sql=mysqli_query($con,"INSERT INTO `bus` (`bus_no`, `busname`, `seat`,type) VALUES ('$bno','$bname',$seat,'$type')") or die(mysqli_error($con));

        echo '<script>
                alert("Inserted Succsessfully......");
            </script>';
    }

    if(isset($_POST['del']))
    {
        $bno=$_POST['bno'];
        $bname=$_POST['bname'];
        check($bno);
        $sql=mysqli_query($con,"delete from bus where bus_no='$bno' or busname='$bname'") or die(mysqli_error($con));
        if(mysqli_affected_rows($con) >0)
        {
            echo '<script>
            alert("Deleted Succsessfully......");
        </script>';
        }
        else{
            echo '<script>
            alert("Bus no not available......");
        </script>';
        }
    }

    if(isset($_POST['up']))
    {
        $bno=$_POST['bno'];
        $bname=$_POST['bname'];
        $seat=$_POST['seat'];
        $type=$_POST['type'];
        checkin($bno,$bname,$seat,$type);

        $sql=mysqli_query($con,"update bus set busname='$bname' ,seat=$seat,type='$type' where bus_no='$bno' ") or die(mysqli_error($con));
        if(mysqli_affected_rows($con) >0)
        {
            echo '<script>
            alert("Updated Succsessfully......");
        </script>';
        }
        else{
            echo '<script>
            alert("Bus no not avilale......");
        </script>';
        }
    }

    if(isset($_POST['se']))
    {
        $bno=$_POST['bno'];
        check($bno);

        $sql=mysqli_query($con,"select * from bus where bus_no='$bno' ") or die(mysqli_error($con));
        if(mysqli_affected_rows($con)>0)
        {
            while($row=mysqli_fetch_array($sql))
		    {
                $bno1=$row['bus_no'];
                $bname=$row['busname'];
                $seat=$row['seat'];
                $type=$row['type'];
		    }
            ?>
             <script>
			        document.getElementById("bno1").value="<?php echo $bno1;?>";
			        document.getElementById("bname1").value="<?php echo $bname;?>";
                    document.getElementById("seat").value="<?php echo $seat;?>";
                    document.getElementById("type").value="<?php echo $type;?>";
		    </script>
        <?php
        }
        else{
            echo '<script>
            alert("Bus no not avilale......");
        </script>';
        }
    }

    function checkin($bno,$bname,$seat,$type)
    {
        if(empty($bno) || empty($bname) || empty($seat || empty($type)))
        {
            echo '<script>
                    alert("Enter Bus Data");
                 </script>';
            exit();
        }
    }
    function check($bno)
    {
        if(empty($bno))
        {
            echo '<script>
                    alert("Enter Bus No");
                </script>';
            exit();
        }
    }
?>