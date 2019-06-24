 <?php
   include'../Controller/UserController.php';
 
  // where attempt is more than else it is block the site for 3 times
  //echo $_COOKIE['attempt'];
  if(isset($_COOKIE['attempt']) and $_COOKIE['attempt']>=0)
  {
	  echo "You Attempt 2 Time WRONG Username and Password Try After 3 Minutes";
	  die();
  }  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Hotel Booking Management system</title>
	<!--<meta name="description" content="">
    <meta name="author" content="">-->
	<!--CSS for all pages-->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css1/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!--//fonts-->
	</head>
	<body>
	<header>
	 <nav class="navbar navbar-expand-lg navbar-light">
	<!--<a href="index.php" class="navbar-brand ml-3">Lake <span style="color:#00E8E8;">Hotel</span></a>-->
	<a  href="index.php"><i class="fa fa-home"></i> Homepage</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
	aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	</nav>
	</header>
	<!--form main heading drama club-->
	<script>
function load()
{
	var txt =  document.getElementById('uname').value;
	var req;
	if(window.XMLHttpRequest)
	{
		req = new XMLHttpRequest();
	}
	else req = new ActiveXObject("Microsoft.XMLHTTP");
	req.onreadystatechange = function()
	{
		if(req.readyState==4)
		{
		
		document.getElementById('mydiv').innerHTML = req.responseText;
		}
	}
req.open("GET", "UserController.php?val="+txt, true)
req.send();
}
</script>
<!--form main heading drama club-->
	<main>
	<div class="container-fluid p-0">
	  <div class="site-content">
	    <div class="d-flex justify-content-center">
		 <div class="d-flex flex-column">
		  <h1 class="site-title">Lake Hotel Reservation</h1>
		   <p class="site-desc">To Get A Better Services.</p>
		    </div>
		 </div>
		</div>
	</div>
	
<!--for login page-->
	  <div class="container">
         <div class="col-md-6 form">
	       <h2>User Login Form</h2>
           <form method="POST" action="../Controller/UserController.php">
            <div class="form-group">
              <label for="name">Username:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your Username" name="uname" autocomplete="off" required>
            </div>
	        <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="pass" autocomplete="off" required>
            </div>
	      <button name="login" type="submit" value="LOGIN" class="btn btn-primary">Submit</button>
	     <span class="psw">Forgot <a href="#">password?</a></span>
	    <br>
	    <br>
	   </form>
	  </div>
	 </div>
	 
	
	<br>
	<!--end login page-->
<!--for User register form-->
    <div class="container">
     <div class="col-md-6 form">
      <h2>Register form</h2>
        <form method="POST" action="../Controller/UserController.php">
        <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" autocomplete="off" required>
        </div>
        
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="inputPassword6" placeholder="Enter Password" name="pass" autocomplete="off" required>
        </div>
        
	    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" autocomplete="off" required>
        </div>
	    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" autocomplete="off" required>
        </div>
	    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone.No" name="phoneno" autocomplete="off" required>
        </div>
        
      <button type="submit" name="UserRegister" value="Register" class="btn btn-primary" name="userRegister">Submit</button>
      <br>
      <br>
   </form>
  </div>	
</div>

</main>
	 <footer>
<div class="container">
<div class="row shadow">

<div class="col-md-12">				
<div class="footer-copyright text-center py-3">© 2019 Copyright:LakeHotel.com
  </div>				
	</div>
	</div>
	</div>	
	</footer>
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Top Page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
<!--ending Contact us-->
<!--bootstrap for pages-->
	    <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
	<!--for cookie-->
	<!--javascript-->

<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>
	</body>
</html>