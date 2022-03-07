<?php

    $uname=$_REQUEST['uname'];

    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
        die("Something gone wrong...");
    }
    $sql=mysqli_query($con,"select * from customer where uname='$uname'") or die(mysqli_error($con));
    $row=mysqli_affected_rows($con);
    if($row >0)
    {
        echo '<span style="color:red">Username is not available..</span>';
    }
    else
    {
        echo '';
    }
    
?>