
<?php
    session_start();
    $check=false;
    if(isset($_SESSION['uname']) or isset($_SESSION['cust_id']))
    {
       $check=true;
    }
?>

<!DOCTYPE html>
<html>
    <head>   
        <link rel="stylesheet" href="CSS/nav.css">
        <style>
            table
            {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse:collapse;
                width: 100%;
            }
            td{
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;  
            }
            .table
            {
                padding-top: 5px;
                padding-left: 30px;
                padding-right: 30px;
                padding-bottom: 10px;
                border-radius: 5px;
                background-color: #f2f2f2;
            }
            
        </style>
    </head>
<body>
<div class="content">
    
    <table class="table" width="100%" style="background-color:black"><tr><td>
    <img src="imageheader/header1.jpg" width="800" height="80"/>
    </td>
    </tr>
    </table>
    
      
    <div id='cssmenu'>

        <?php 
            if($check==true)
            {
                if($_SESSION['uname']=="admin")
                {
                    echo 
                    '<ul>
                    <li><a href="bus.php">Bus</a></li>
                    <li><a href="route.php">Bus Route</a></li>
                    <li><a href="driver.php">Driver</a></li>
                    <li><a href="report_customer.php">Customer Report</a></li>
                    <li><a href="report_booking.php">Booking Report</a></li>
                    <li><a href="destroy.php"><span>Logout</span></a></li>
                    <li class="cname"><img class="uimg" src="image/user (1).png" align="center" alt="not" width="30px" heigth="30px" >Welcome '.$_SESSION['name'].'</li>
                    </ul>
                    </ul>';
                }
                else
                {
                echo '<ul>
                <li><a href="h.php"><span>Home</span></a></li>
                <li><a href="booked.php"><span>My Booking</span></a></li>
                <li><a href="about.php"><span>About Us</span></a></li>
                <li><a href="review.php"><span>Reviews</span></a></li>
                <li><a href="feedback.php"><span>Feedback</span></a></li>
                <li><a href="contactus.php"><span>Contact Us</span></a></li>
                <li><a href="destroy.php"><span>Logout</span></a></li>
                <li class="cname"><img class="uimg" src="image/user (1).png" align="center" alt="not" width="30px" heigth="30px" >Welcome '.$_SESSION['name'].'</li>
                </ul>';
                
                
                }
            
            }
            else
            {
                echo '<ul>
                <li><a href="h.php"><span>Home</span></a></li>
                <li><a href="about.php"><span>About Us</span></a></li>
                <li><a href="review.php"><span>Reviews</span></a></li>

                <li><a href="contactus.php"><span>Contact Us</span></a></li>';
               
                echo 
                    '<li><a href="login.php"><span>Login</span></a></li>
                    <li><a href="signUp.php"><span>Sign Up</span></a></li>
                    </ul>'
                    ;
            }
        ?>
            
            </ul>
    </div>

  <img class="mySlides" src="imageheader/h_header1_bus.png" width="100%" height="160">
  <img class="mySlides" src="imageheader/h_header2_bus.png" width="100%" height="160">
  
  <script>
// Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();
    function carousel() 
    {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) 
        {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) 
        {
            myIndex = 1
        }
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000);
    }
</script>
</div>
</body>
</html>

<script>
    const currentLocation=location.href;
    const mItem=document.querySelectorAll('a');
    const mlength=mItem.length;
    for(let i=0;i<mlength;i++)
    {
    
        if(mItem[i] == currentLocation)
        {
            mItem[i].className="active";
            mItem[i].style.backgroundColor="blue";
        }
    }
</script>
