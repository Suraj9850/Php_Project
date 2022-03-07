<?php

    $con = mysqli_connect("localhost", "root", "", "busbooking");
    if (!$con) 
    {
        die("Could not connect" . mysqli_error($con));
    }

    if(!isset($_SESSION['uname'])=='admin')
    {
    header("location:destroy.php");
    }

    $cid=$_REQUEST['cid'];

    $sql=mysqli_query($con,"Delete from customer where cust_id=$cid");

    if($sql)
    {
        header("location:report_customer.php");
    }
    else
    {
?>
        <script>
            alert("Something gone wrong...");
            location.href="report_customer.php";
        </script>
<?php
    }
?>