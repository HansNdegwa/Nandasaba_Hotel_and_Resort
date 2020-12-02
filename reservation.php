<?php

//To embed the class.user.php file
    include_once 'admin/include/class.user.php'; 
    $user=new User(); 



    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_available($checkin, $checkout);
        if(!($result))
        {
            echo $result;
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hotel Booking</title>
    <link href="reservation.css" rel="stylesheet">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
 <!-- This displayes an automatic calender to pick a date -->
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>
    
    
    
    
    
</head>

<body>
    <div class="container">
      
      <!-- header image -->
       <img class="img-responsive" src="images/banner.jpg" style="width:100%; height:180px;">      
        
        <!-- Navigation bar -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li class="active"><a href="reservation.php">Online Reservation</a></li>

                   <li><a href="admin.php">Admin</a></li>
                </ul>

                <!-- hyperlinks -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
        
        <!-- Form -->
       <div class='row'>
        <div class='column1'></div>
        <div class='column2 well'>
         <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin">Check In :</label>&nbsp;&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkin">

                </div>
               
               <div class="form-group">
                    <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                    <input type="text" class="datepicker" name="checkout">
                </div>
                 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary button" name="submit">Check Availability</button>

            </form>
           </div>
           <div class="col-md-3"></div>
        </div> 
<?php   
        //After submit button clicked
         if(isset($_REQUEST[ 'submit']))
         {
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    //select query
                    $room_cat=$row['room_cat'];
                    $sql="SELECT * FROM room_category WHERE roomname='$room_cat'";
                    $query = mysqli_query($user->db, $sql);
                    $row2 = mysqli_fetch_array($query);
                    
                    //output
                   echo "
                            <div class='row'>
                            <div class='column1'></div>
                            <div class='column2 well'>
                                <h4>".$row2['roomname']."</h4><hr>
                                <h6>No of Beds: ".$row2['no_bed']." ".$row2['bedtype']." bed.</h6>
                                <h6>Available Rooms: ".$row2['available']."</h6>
                                <h6>Facilities: ".$row2['facility']."</h6>
                                <h6>Price: ".$row2['price']." kshs per night.</h6>
                            </div>
                            <div class='col-md-3'>
                                <a href='./booknow.php?roomname=".$row2['roomname']."'><button class='btn btn-primary button'>Book Now</button></a>
                            </div>   
                            </div>
                            
                            
                        
                    
                         ";
                    
                    
                }
                
                
                          
            }
         }
        
        
?>


    </div>
    
    
    
    
    





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>