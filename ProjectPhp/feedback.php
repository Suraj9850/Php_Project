
<?php
    include("head.php");
     $con=mysqli_connect("localhost","root","","busbooking");
     if(!$con)
     {
             die("Could not connect".mysqli_connect_error());
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
    
    <script>
       
        function change()
        {
            document.getElementById("bdata").innerHTML="";
            let value=document.getElementById("revi").value;
            if(value=="Journey")
            {
                document.getElementById("bdata").innerHTML+='<select name="route" id="sel"><option selectd>Select Route</option><?php               $sql=mysqli_query($con,"select distinct source,destination from booking,bus_route where booking.busrouteid=bus_route.busrouteid and cust_id=$_SESSION[cust_id] and jdate<curdate()") or die(mysqli_error($con));
                while($r=mysqli_fetch_array($sql))
                {
                   echo '<option name="rname">'.$r['source']."-".$r['destination'].'</option>';
                }
                
                ?></select><br><br>';
            }
            else
            {
                document.getElementById("bdata").innerHTML="";
            }
        }   
    </script>
</head>

<body>
    <div class="container">
        <h2>FEEDBACKS</h2>
        <form method="post" action="#">
            <select onchange="change()"  id="revi" name="review">
                <option>Select Feedback</option>
                <option value="Booking">Booking</option>
                <option value="Journey">Journey</option>
            </select><br><br>
            <div id="bdata">
            </div>
            <textarea rows="8"  minlength="5" maxlength="255" name="data" placeholder="Write something"></textarea>
            <input type="submit" name="btn" value="Sumbit">
        </form>
    </div>
</body>

</html>
<?php
    if(isset($_POST['btn']))
    {
        $select=$_POST['review'];
        $text1=$_POST['data'];
        $text1;
        $text=trim($text1);
        if(!empty($select) and !empty($text))
        {
            if($select != "Select Feedback" and $select=="Journey")
            {
                $select1=$_POST['route'];
                if(!empty($select))
                {
                    if($select1 != "Select Route" )
                    {
                        $sql=mysqli_query($con,"select max(rno) as rid  from jreview") or die(mysqli_error($con));
                        $res=mysqli_fetch_array($sql);
                        $count=$res['rid']+1;
                        $count;

                       $sql=mysqli_query($con,"INSERT INTO `jreview` (`rno`, `busroute`, `cust_id`, `review`, `cname`, `rdate`) VALUES ($count,'$select1',$_SESSION[cust_id],'$text','$_SESSION[name]',curdate())") or die(mysqli_error($con));

                        echo '<script>
                                alert("Feedback Recorded Succsessfully......");
                            </script>';
                    }
                    else
                    {
                        echo '<script>
                                alert("Select The Route");
                            </script>';
                    }
                }
                
            }
            elseif($select=="Booking")
            {
                $sql=mysqli_query($con,"select max(rno) as rid  from breview") or die(mysqli_error($con));
                $res=mysqli_fetch_array($sql);
                $count=$res['rid']+1;
                $count;

                $sql=mysqli_query($con,"INSERT INTO `breview` (`rno`, `cust_id`, `review`, `cname`, `rdate`) VALUES ($count,$_SESSION[cust_id],'$text','$_SESSION[name]',curdate())") or die(mysqli_error($con));

    
                    echo '<script>
                        alert("Feedback Recorded Succsessfully......");
                    </script>';
            }
            else{
                echo "Select the feedback";
            }

        }
        else
        {
            echo '<script>
            alert("Enter Bus Data");
         </script>';
        }
        
    }
    mysqli_close($con);
?>