<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/NandasabaLogo.png" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>

     
        <div class="jumbotron">
        <div class="w3-content w3-section">
          <img class="mySlides w3-animate-fading" src="images/home_gallery/banner1.jpg" style="width:100%; height:450px;">
          <img class="mySlides w3-animate-fading" src="images/home_gallery/banner2.jpg" style="width:100%; height:450px;">
          <img class="mySlides w3-animate-fading" src="images/home_gallery/banner3.jpg" style="width:100%; height:450px;">
          <img class="mySlides w3-animate-fading" src="images/home_gallery/banner4.jpg" style="width:100%; height:450px;">
          <img class="mySlides w3-animate-fading" src="images/home_gallery/banner5.jpg" style="width:100%; height:450px;">
        </div>    
        </div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h4><strong style="color: #ffbb2b">About</strong></h4><br>
              <p>Built in 1904, Nandasaba Hotel & Resort is a 10-minute walk from the National Museums of Kenya and 3 km from Uhuru Park.</p>
              <br>
              <p>The elegant rooms and suites come with flat-screen TVs, Wi-Fi, and tea and coffeemakers, along with safes. Some feature verandas. Suites add living rooms, and some have private terraces.</p>
              <br>
              <p>There's a chic restaurant, a casual eatery with a terrace, and a high-end wine bar. A sophisticated lounge offers high tea. Other amenities include a heated outdoor pool, a fitness center and a spa. Meeting and event space is available, including a ballroom. Breakfast is offered.</p>
              <br>
              <p>Check-in time: 14:00 <br> Check-out time: 10:00</p>
            </div>  
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
                Hans Ndegwa 1028005 <br>
                Benard Makori 1027641 <br>
                Brian Gacheru 1039599 <br>
                Bridgit Munyao 1023308 <br><br><br>
              
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a href="#">Hans Ndegwa 1028005 <br>
                Benard Makori 1027641 <br>
                Brian Gacheru 1039599 <br>
                Bridgit Munyao 1023308 <br><br><br></a>

            </div>
        </div>
        



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>