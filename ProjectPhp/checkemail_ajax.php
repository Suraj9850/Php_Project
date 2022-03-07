<?php

    $email=$_REQUEST['email'];

    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
        die("Something gone wrong...");
    }
    $sql=mysqli_query($con,"select * from customer where email='$email'") or die(mysqli_error($con));
    $row=mysqli_affected_rows($con);
    if($row >0)
    {
        echo '<span style="color:red">Email is not available..</span>';
    }
    else
    {
        echo '';
    }
?>