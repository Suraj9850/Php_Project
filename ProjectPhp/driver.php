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
        <lable>Driver no:</label><input type="number"  id="dno1" name="dno" required>
        
        <label>Driver name:</label><input type="text" id="dname1" name="dname" minlength="2" maxlength="20">
        
        <label>Address:</label><textarea id="add1"name="add" minlength="4" maxlength="50"></textarea>
        
        <label>Contact no:</label><input type="number"  id="cno1"name="cno" minlength="10">
        
        <label>License number:</label><input type="text" id="lno1" name="lno" minlength="10"><br><br>

        <input type="submit"  name="in" value="Insert">
        <input type="submit"  name="del" value="Delete">
        <input type="submit" name="up" value="Update">
        <input type="submit" name="se" value="Search">
    </form>
    </div>
</body>
</html>



<?php
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
        die("Could not connect".mysqli_connect_error());
    }

    $sql=mysqli_query($con,"select max(driver_no) as dno from driver") or die(mysqli_error($con));
    $res=mysqli_fetch_array($sql);
    $count=$res['dno']+1;

?>

        <script>    
            document.getElementById("dno1").value="<?php echo $count;?>";
        </script>
<?php
    if(isset($_POST['in']))
    {
        $dno=$_POST['dno'];
        $dname=$_POST['dname'];
        $add=$_POST['add'];
        $cno=$_POST['cno'];
        $lno=$_POST['lno'];

        checkin($dno,$dname,$add,$cno,$lno);

        $sql=mysqli_query($con,"INSERT INTO `driver` (`driver_no`, `driver_name`, `address`, `contact_no`, `license_number`) VALUES ($count,'$dname','$add',$cno,'$lno')") or die(mysqli_error($con));

        echo '<script>
                alert("Inserted Succsessfully......");
            </script>';
    }

    if(isset($_POST['del']))
    {
        $dno=$_POST['dno'];
        check($dno);
        $sql=mysqli_query($con,"delete from driver where driver_no=$dno ") or die(mysqli_error($con));
        if(mysqli_affected_rows($con) >0)
        {
            echo '<script>
            alert("Deleted Succsessfully......");
        </script>';
        }
        else{
            echo '<script>
            alert("Driver no not avilale......");
        </script>';
        }
    }

    if(isset($_POST['up']))
    {
        $dno=$_POST['dno'];
        $dname=$_POST['dname'];
        $add=$_POST['add'];
        $cno=$_POST['cno'];
        $lno=$_POST['lno'];
        checkin($dno,$dname,$add,$cno,$lno);

        $sql=mysqli_query($con,"UPDATE `driver` SET `driver_no`=$dno,`driver_name`='$dname',`address`='$add',`contact_no`=$cno,`license_number`='$lno' WHERE driver_no=$dno ") or die(mysqli_error($con));
        if(mysqli_affected_rows($con) >0)
        {
            echo '<script>
            alert("Updated Succsessfully......");
        </script>';
        }
        else{
            echo '<script>
            alert("Driver no not avilale......");
        </script>';
        }
    }

    if(isset($_POST['se']))
    {
        $dno=$_POST['dno'];
        check($dno);

        $sql=mysqli_query($con,"select * from driver where driver_no='$dno' ") or die(mysqli_error($con));
        if(mysqli_affected_rows($con) >0)
        {
            while($row=mysqli_fetch_array($sql))
		    {
                $dno=$row['driver_no'];
                $dname=$row['driver_name'];
                $add=$row['address'];
                $cno=$row['contact_no'];
                $lno=$row['license_number'];
		    }
            ?>
             <script>
			        document.getElementById("dno1").value="<?php echo $dno;?>";
			        document.getElementById("dname1").value="<?php echo $dname;?>";
                    document.getElementById("add1").value="<?php echo $add;?>";
			        document.getElementById("cno1").value="<?php echo $cno;?>";
                    document.getElementById("lno1").value="<?php echo $lno;?>";
		    </script>
        <?php
        }
        else{
            echo '<script>
            alert("Bus no not avilale......");
        </script>';
        }
    }

    function checkin($dno,$dname,$add,$cno,$lno)
    {
        if(empty($dno) || empty($dname) || empty($add) || empty($cno) ||empty($lno) )
        {
            echo '<script>
                    alert("Enter Driver Data");
                </script>';
            exit();
        }
    }
    function check($dno)
    {
        if(empty($dno))
        {
            echo '<script>
                    alert("Enter Driver No");
                 </script>';
            exit();
        }
    }
?>