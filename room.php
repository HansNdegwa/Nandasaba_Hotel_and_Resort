<!-- To initialize the database -->
<?php
//To embed the class.user.php file
include_once 'admin/include/class.user.php'; 
$user=new User();
?>



<!DOCTYPE html>
<html>

<head>
    <title>Hotel Booking</title>
    <!-- css file -->
    <link rel="stylesheet" href="room.css" type="text/css">
        
</head>

<body>
    <div class="container">
      
      <!-- website banner image -->
       <img class="img-responsive" src="images/banner.jpg" style="width:100%; height:180px;">
       <!-- Navigation bar -->      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="review.php">Review</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>

                <!-- hyperlinks -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        
        
        
        <?php
        
        //select query to show rooms
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                //Show Room Category
                while($row = mysqli_fetch_array($result))
                {
                    //Output
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4><hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                <h6>Facilities: ".$row['facility']."</h6>
                                <h6>Price: ".$row['price']." kshs per night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button> </a>
                            </div>   
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