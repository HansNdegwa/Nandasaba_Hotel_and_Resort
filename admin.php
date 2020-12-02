<?php session_start();
//to embed the class.user.php file to  link the database
include_once 'admin/include/class.user.php';

//to log into the admin page
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <!-- css style sheet -->
    <link rel="stylesheet" href="admin.css" type="text/css">
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
                    <li class="active"><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <!-- logout button -->
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- admin privileges -->
        <div class="row">
           <div class="column1"></div>
            <div class="column2 well">
            <!-- Room category -->
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li><a href="admin/addroom.php">Add Room Category</a></li><br>
                    <li><a href="show_room_cat.php">Show All Room Category</a></li><br>
                    <li><a href="show_room_cat.php">Edit Room Category</a></li>
                </ul>
            </div>
            <div class="column1"></div>
        </div>

        <div class="row">
           <div class="column1"></div>
            <div class="column2 well">
            <!-- Bookings -->
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li><a href="room.php">Book Now</a></li><br>
                    <li><a href="show_all_room.php">Show All Booked Rooms</a></li><br>
                    <li><a href="show_all_room.php">Edit Booked Room</a></li>
                </ul>
            </div>
           <div class="column1"></div>
        </div>
        
        
        <div class="row">
           <div class="column1"></div>
            <div class="column2 well">
            <!-- adding more admin users  -->
                <h4>Add Manager</h4>
                <hr>
                <ul>
                    <li><a href="admin/registration.php">Add Manager</a></li>
 
                </ul>
            </div>
            <div class="column1"></div>
        </div>









    </div>



























    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>