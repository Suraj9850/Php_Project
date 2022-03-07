
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/table.css">
    <title>Cancelation</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body bgcolor="#3498DB">
</body>
</html>

<?php

    include("head.php");
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
            die("Could not connect".mysqli_error());
    }

    $bid=$_REQUEST['bid'];
    $fare=$_REQUEST['fare'];

    $sql=mysqli_query($con,"delete from booking where bookingid=$bid") or die("Something gone wrong".mysqli_error($con));

    $sql1=mysqli_query($con,"delete from passenger where bookingid=$bid") or die("Something gone wrong".mysqli_error($con));

    if($sql and $sql1)
    {
        echo '<script>
                alert("Ticket cancel successfully");
            </script>';
        
        echo '<div class="content">
            <center><h2>
                Dear '.$_SESSION['name'].' your ticket cancel successfully your amount '.$fare.' will be fully refunded with 7 working days on source payment method...
            </h2></center>
            </div>';
    }
    
?>
<div class="container">
    <?php include_once "footer.html" ?>
</div>

