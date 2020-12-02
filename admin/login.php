<?php session_start(); 
//To embed class.user.php file to link database
include_once 'include/class.user.php'; 
$user=new User(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
   <!-- css stylesheet -->
    <link rel="stylesheet" href="css/login.css" type="text/css">

    <!-- Validation rule incase of no input -->
    <script language="javascript" type="text/javascript">
        function submitlogin() {
            var form = document.login;
            if (form.emailusername.value == "") {
                alert("Enter email or username.");
                return false;
            } else if (form.password.value == ) {
                alert("Enter Password.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Log In</h2>
            
            <!-- Login form -->
            <hr>
            <form action="" method="post" name="login">
                <div class="form-group">
                    <label for="emailusername">Username or Email:</label>
                    <input type="text" name="emailusername" class="form-control" value="admin" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" class="form-control" value="1234" required>
                </div>
                
                
                <!--For showing error incase of wrong input  -->
                <p id="wrong_id" style=" color:red; font-size:12px; "></p>
                <button type="submit" name="submit" value="Login" onclick="retrun(submitlogin());" class="btn btn-lg btn-primary btn-block">Submit</button>
                
                <br>
                <p style="text-align: center; font-size: 14px;"><a href="../index.php">Back To Home</a></p>
                
                <!-- validation rule -->
                <?php if(isset($_REQUEST[ 'submit'])) { extract($_REQUEST); $login=$user->check_login($emailusername, $password); 
                    if($login) { echo "<script>location='../admin.php'</script>"; } 
                else{?>

                <script type="text/javascript">
                    document.getElementById("wrong_id").innerHTML = "Wrong username or password";
                </script>

                <?php } }?>

            </form>
        </div>
    </div>

</body>

</html>