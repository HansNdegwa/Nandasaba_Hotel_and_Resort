<?php
//embed class.user.php file to link database
include_once 'include/class.user.php'; 
$user=new User(); 

$room_cat=$_GET['roomname'];

//select query to display calues in room_category table
$sql="SELECT * FROM room_category WHERE roomname='$room_cat'";
$query=mysqli_query($user->db, $sql);
$row = mysqli_fetch_array($query);
 

//if submit button is clicked
if(isset($_REQUEST[ 'submit'])) 
{ 
    //saved room details are extracted and displayed
    extract($_REQUEST); 
    $result=$user->edit_room_cat($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price,$room_cat);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('".$result."');
         </script>";
    }

   
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    
</head>

<body>
    <div class="container">
        <div class="well">

        <!-- Adding a room category -->
            <h2>Add Room Category</h2>
            <hr>

            <!-- room name -->
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Room Type Name:</label>
                    <input type="text" class="form-control" name="roomname" value="<?php echo $row['roomname'] ?>" required>
                </div>

                <!-- number of rooms -->
                 <div class="form-group">
                    <label for="qty">No of Rooms:</label>&nbsp;
                    <select name="room_qnty">
                    <option value="<?php echo $row['room_qnty'] ?>"><?php echo $row['room_qnty'] ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                       <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                </div>

                <!-- number of beds in the room -->
                <div class="form-group">
                    <label for="bed">No of Bed:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="no_bed">
                     <option value="<?php echo $row['no_bed'] ?>"><?php echo $row['no_bed'] ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                </div>

                <!-- the type of beds -->
                <div class="form-group">
                    <label for="bedtype">Bed Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <select name="bedtype">
                     <option value="<?php echo $row['bedtype'] ?>"><?php echo $row['bedtype'] ?></option>
                      <option value="single">single</option>
                      <option value="double">double</option>
                    </select>
                </div>

                <!-- facilities available in the room -->
                <div class="form-group">
                    <label for="Facility">Facility</label>
                    <textarea class="form-control" rows="5" name="facility"><?php echo $row['facility'] ?></textarea>
                </div>

                <!-- price of the room -->
               <div class="form-group">
                    <label for="price">Price Per Night:</label>
                    <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit">Update</button>

               <br>
               <!-- to return back to the admin panel -->
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>