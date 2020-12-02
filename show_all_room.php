<?php
//embed class.user.php file to link the database
include_once 'admin/include/class.user.php'; 
$user=new User();


?>



<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Hotel Booking</title>
    <!-- css sheet -->
    <link rel="stylesheet" href="showroom.css" type="text/css">
   
    
</head>

<body>
    <div class="container">
      
      <!-- website banner image -->
       <img class="img-responsive" src="images/banner.jpg" style="width:100%; height:180px;">      
        
        <!-- navigation bar -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <!-- logout button -->
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>

                <!-- hyperlinks -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        
        
        
        <?php
        //select query to show all rooms
        $sql="SELECT * FROM rooms WHERE book='true'";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                //Show Room Category
                while($row = mysqli_fetch_array($result))
                {
                    //output
                    echo "
                            <div class='row'>
                            <div class='col-md-2'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['room_cat']."</h4><hr>
                                <h6>Checkin: ".$row['checkin']." and checkout: ".$row['checkout']."</h6>
                                <h6>Name: ".$row['name']."</h6>
                                <h6>Phone: ".$row['phone']."</h6>
                                <h6>Booking Condition: ".$row['book']."</h6>
                            </div>
                            &nbsp;&nbsp;
                            <a href='edit_all_room.php?id=".$row['room_id']."'><button class='btn btn-primary button'>Edit</button></a>
                            </div>
                            
                    
                    
                         ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    



















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>