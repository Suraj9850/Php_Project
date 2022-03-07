<?php
    $con=mysqli_connect("localhost","root","","busbooking");
    if(!$con)
    {
            die("Could not connect".mysqli_error());
    }

    $src=$_REQUEST['src'];
    $sql=mysqli_query($con,"select distinct destination from bus_route where source='$src'")or die(mysqli_error($con));

    echo '<option selected disabled>Destination</option>';
    while($res=mysqli_fetch_assoc($sql))
    {   
        
        echo '<option>'.$res['destination'].'</option>';
    }
    if($src=="Source")
    {
        echo '<option>Destination</option>'; 
    }
?>