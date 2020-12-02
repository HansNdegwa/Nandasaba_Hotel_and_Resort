<?php

//To embed the class.user.php file to link the database
include_once 'include/class.user.php'; 

//to create a new user
$user=new User(); 

//when submit button is clicked
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    //variables to be extracted
    $register=$user->reg_user($fullname, $uname, $upass, $uemail); 
    
    //validation statement
    if($register) 
    { 
        echo "
<script type='text/javascript'> alert('Your Manager has been Added Successfully'); </script>"; 
        echo "
<script type='text/javascript'> window.location.href = '../admin.php'; </script>"; 
    } 
    //when error occurs
    else 
    {
        echo "
<script type='text/javascript'> alert('Registration failed! username or email already exists'); </script>";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <!-- Stylesheet css -->
    <link rel="stylesheet" href="css/reg.css" type="text/css">

    <script language="javascript" type="text/javascript">
        
        //Function to prompt user input
        function submitreg() {
            var form = document.reg;
            if (form.name.value == "") {
                alert("Enter Name.");
                return false;
            } else if (form.uname.value == "") {
                alert("Enter username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter Password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter email.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="well">

        <!-- Input form to add user -->
            <h2>Add Your Manager</h2>
            <hr>
            <form action="" method="post" name="reg">
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" placeholder="example: Hans Ndegwa" required>
                </div>
                <div class="form-group">
                    <label for="uname">User Name:</label>
                    <input type="text" class="form-control" name="uname" placeholder="exmple: HNdegwa" required>
                </div>
                <div class="form-group">
                    <label for="uemail">Email:</label>
                    <input type="email" class="form-control" name="uemail" placeholder="example: hansndegwa@cuea.edu" required>
                </div>
                <div class="form-group">
                    <label for="upass">Password</label>
                    <input type="text" class="form-control" name="upass" placeholder="cuea@123" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Manager" onclick="return(submitreg());">Submit</button>

               <br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>