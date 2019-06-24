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
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.9.0-web\css\all.css"> 
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
	<a href="#" class="navbar-brand ml-3">Lake <span style="color:#00E8E8;">Hotel</span></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
	aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse"></div>
	<div class="collapse navbar-collapse" id="navbarMenu">
	    <ul class="navbar-nav">
		<li class="nav-item active">
		<a href="index.php" class="nav-link">Home</a>
		</li>
		<li class="nav-item">
		<a href="#reservation" class="nav-link">Room Reservation </a>
		</li>
		<li class="nav-item">
		<a href="#about" class="nav-link">About Us</a>
		</li>
		<li class="nav-item">
		<a href="#gallery" class="nav-link">Gallery</a>
		</li>
		<li class="nav-item">
		<a href="Register.php" class="nav-link">Account</a>
		</li>
		<li class="nav-item">
		<a href="#contact" class="nav-link">Contact Us</a>
		</li>
		<form class="form-inline" action="/action_page.php">
    <input class="form-control" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
		</ul>
		</div>
	</nav>
	</header>
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
	<!--for slide images in home page-->
     <div id="Slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#Slider" data-slide-to="0" class="active"></li>
    <li data-target="#Slider" data-slide-to="1"></li>
    <li data-target="#Slider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#Slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--ending slider-->
<!--for Room Reservation-->
<div class="container-fluid p-0" id="reservation">
	  <div class="site-content">
	    <div class="d-flex justify-content-center">
		 <div class="d-flex flex-column">
             <a href="reservation.php"><h2 style="font-size:50px">ROOM <br>RESERVATION</h2></a>
		    </div>
		 </div>
		</div>
	</div>
<!--ending room registration-->
<!-- banner-bottom -->
<div class="section-1">
	 <div class="container text-center">
	   <h1 class="heading-1">Experience is A Good Stay, Enjoy Fantastic Offer</h1>
	     <p class="para-1">"A characterful, hotel with views of the Himalaya."</p>
		 
		  <div class="row p-0 shadow">
             <div class="col-md-3 mb-4 shadow"> 
             <i class="fas fa-bed" style="font-size:48px;color:red"></i>
             <h4 class="my-3">MASTER BEDROOMS</h4>
             </div>
              
             <div class="col-md-3 mb-4 shadow"> 
             <i class="far fa-building" style="font-size:48px;color:red"></i>
             <h4 class="my-3">SEA VIEW BALCONY</h4>
             </div>
              
             <div class="col-md-3 mb-4 shadow"> 
             <i class="fas fa-coffee" style="font-size:48px;color:red"></i>
             <h4 class="my-3">LARGE CAFE</h4>
             </div>
             <div class="col-md-3 mb-4 shadow"> 
             <i class="fas fa-wifi" style="font-size:48px;color:red"><p style="font-size:20px">Free</p>Wi-Fi</i>
             </div>

		 <p2 class="container text-center"  style="font-size:20px;" >Comfortable, great food and great views , what more can you ask. <br>All the staff were genuinely helpful and informative.<br> Lots to see and do close by. <br>An ideal base for the Pokhara valley. <br>The hotel is a notable local venue, and was used for a wedding party while we were there.<br> This was an added entertainment and added to the experience</p2>
        </div>
     </div>
</div>
<!--ending banner-->

<!--About us-->	
	<div class="section-1" id="about">
	 <div class="container shadow text-center">
	   <h1 class="heading-1">ABOUT US LAKE HOTEL</h1>
	     <p class="para-1">Cheerful welcome to you all in Hotel Lake Paradise “ An Upscale accommodation in Pokhara.”</p>
	     <h2>WELCOME TO<span style="color:red;font-size:48px" > <br>OUR HOTEL</span></h2>
	      <p2 class="container text-center"  style="font-size:20px;" >Hotel Lake Paradise is a brand new beautifully designed luxury hotel in Pokhara tucked quietly just around the corner within a 5 minutes walk from the magnificent Fewa Lake, Lakeside Pokhara ,a gateway for all tourists in Pokhara. Hotel offers 30 well appointed modern luxurious guest rooms which includes Deluxe room ,Deluxe Family room, Juinor Suite & One Bedroom Apartment with the Private Balcony in each room & spellbinding views of majestic Himalayas, vibrant green hills all around & shimmering lakes, a complete tranquil atmosphere. Each detail has been passionately chosen and each room deserves a visit. 
	      <br>
	      <br>
	      Hotel reflects the true values of warmth and service excellence with stylish and well-designed interiors of simple pale wood, cream surroundings & marbles. Relaxing nature sound of water Spouts & Fountain awaits your arrival at the hotel entrance.
          Lake Paradise is a perfect choice for your next family or business trip. Experience first class service, on-site dining options, parking and complimentary high-speed wireless connectivity service. We promise you for a better value for your conference, vacation, meeting or social events.
	      </p2>
       <div class="row justify-content-center text-center">
		<div class="col-md-4">
		   <div class="card shadow">
		   <div class="inner">
			<img src="image/Lake-View-Point.jpg" alt="Image1" class="card-img-top ">
           </div>
			<div class="card-body">
			<h4 class ="card-title">LAKE VIEW POINT</h4>
			</div>
		 </div>
		 </div>
		  <div class="col-md-4">
		    <div class="card shadow">
		    <div class="inner">
			<img src="image/night.jpg" alt="Image2" class="card-img-top">
			</div>
			<div class="card-body">
			<h4 class ="card-title">INSIDE HOTEL</h4>
			</div>
			</div>
		 </div>
		 <div class="col-md-4">
		    <div class="card shadow">
		    <div class="inner">
			<img src="image/Rooftop.jpg" alt="Image3" class="card-img-top">
			</div>
			<div class="card-body">
			<h4 class ="card-title">ROOF TOP</h4>
			</div>
			</div>
		 </div>
		 </div>
     
	<div class="container">
	<h2>WHY CHOOSE<span style="color:#196bb2;font-size:48px" > <br>OUR HOTEL</span></h2>
                <div class="col-md-12">
					<p><i class="fa fa-check" aria-hidden="true"></i>High customer satisfaction</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Delicious breakfast</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Free Wifi</p>
 </div>
 </div>
 </div>
  </div>
<!--ending About us-->
<!--Our Services-->
<div class="section-1">
	 <div class="container shadow text-center">
	   <h2>OUR<span style="color:#196bb2;font-size:48px" > <br>SERVICES</span></h2>
         <p2 class="container text-center"  style="font-size:20px;" >Whether you are travelling for business or pleasure, the luxury hotel services offered by the five star Grand Palace Hotel make it an ideal choice for your stay in Riga, Latvia. The hotel’s luxurious surroundings, comfort, thoughtful touches and a personalized service sets it apart from any other hotel, allowing you to feel like being at home from your very first steps into the hotel.</p2>
         <div class="inner">
  <img class="card-img" src="image/services.jpg" alt="Card image" width="780" height="450">
         </div>
  <div class="bg-dark text-white">
  <div class="row">
		<div class="col-md-6">
			<h4 class ="card-title">Stay First, Pay After! </h4>
			<p>We promise you for a better value for your conference, vacation, meeting or social events.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
			</div>
		<div class="col-md-6">
			<h4 class ="card-title">24 Hour Restaurant</h4>
			<p>First class service, on-site dining options, parking and complimentary high-speed wireless connectivity service.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Wireless high speed internet.</p>
			</div>
  </div>
</div>
</div>
</div>
<!--endingServices page-->
<!--Gallery page-->
<div class="container shadow" id="gallery">
    <h1 class="card-title text-center"><span style="color:#196bb2;" >GALLERY </span></h1>
  <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-left">
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
                <img class="img-fluid img-thumbnail" src="image/garden.jpg" alt="image">
          </a>  
           </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/inside.jpg" alt="lake">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/private%20pool.jpg" alt="private">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/services2.jpg" alt="service">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/night.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
<div class="inner">
            <img class="img-fluid img-thumbnail" src="image/room3.png" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/rest1.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/room2.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/Rooftop.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/rest3.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/room4.jpg" alt="">
          </a>
    </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/rest4.jpg" alt="">
          </a>
    </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<!--ending gallery for pages-->
<!--Hotel Room & Rates-->
<div class="section-1">
	 <div class="container shadow text-center">
         <h2><span style="color:#196bb2;">ROOM AND RATES</span></h2>
   	   <br>
	   <div class="row justify-content-center text-center">
	   <hr class="mt-2 mb-5">
  <div class="row text-center text-lg-left">
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
                <img class="img-fluid img-thumbnail" src="image/delux.jpg" alt="image">
          </a>  
           </div>
           <div class="card-body">
			<h4 class ="card-title">$200.0 Superior Room</h4>
			<a href="reservation.php" value="Read More" class="btn btn-primary"/> Book Now </a>
			</div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/Luxury.jpg" alt="lake">
          </a>
          </div>
          <div class="card-body">
			<h4 class ="card-title">$180.0 Deluxe Room</h4>
			<a href="reservation.php" value="Read More" class="btn btn-primary"/> Book Now </a>
			</div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/guest.jpg" alt="private">
          </a>
           </div>
          <div class="card-body">
			<h4 class ="card-title">$150.0 Guest Room</h4>
            <a href="reservation.php" value="Read More" class="btn btn-primary"/> Book Now </a>
			</div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
           <div class="inner">
            <img class="img-fluid img-thumbnail" src="image/single-room.jpg" alt="service">
          </a>
          </div>
          <div class="card-body">
			<h4 class ="card-title">$100.0 Single Room</h4>
			<a href="reservation.php" value="Read More" class="btn btn-primary"/> Book Now </a>
			</div>
    </div>
		 </div>
		 </div> 
		 </div>
		 </div>
<!--Ending Hotel Room & Rates-->
<!--user experience-->
<div class="section-1">
	 <div class="container shadow text-center">
         <h1 class="heading-1"><span style="color:#196bb2;">What Other Visitors Experienced</span></h1>
	    <p2 class="container text-center" style="font-size:20px;" >Comments from our happy Guests.</p2>
      <br>
      <div class="row shadow">
	   <div class="col-md-12">
	    <img src="image/user1.jpg" class="rounded-circle float-left" alt="Cinque Terre" width="80" height="80">
	    <div class="col-md-8 float-left">
	    <div class="col-md-10">
        	        <p1>
        	            <a class="float-left"><strong>Julia Rose</strong></a>
        	            <br>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>

        	       </p1>
            </div>
			<h4 class ="card-title float-left"></h4>
			<p class="card-text">Great located in the center of the city. Friendly staff, good service especially with the parking service.</p>
			</div>
			</div>
			<br>
    <div class="col-md-12">
	    <img src="image/user2.jpg" class="rounded-circle float-left" alt="Cinque Terre" width="80" height="80">
	    <div class="col-md-8 float-left">
	    <div class="col-md-10">
        	        <p1>
        	            <a class="float-left"><strong>Richard Meyerholz</strong></a>
        	            <br>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>

        	       </p1>
            </div>
            <br>
			<h4 class ="card-title float-left"></h4>
			<p class="card-text">The hotel was very comfortable. the staff was very helpful and pleasant to deal with. I give you guys a 10 on a scale of 1 to 10</p>
			</div>
			</div>   
    <div class="col-md-12">
	    <img src="image/user4.jpg" class="rounded-circle float-left" alt="Cinque Terre" width="80" height="80">
	    <div class="col-md-8 float-left">
	    <div class="col-md-10">
        	        <p1>
        	            <a class="float-left"><strong>Metin Tayfun Iseri</strong></a>
        	            <br>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-left"><i class="text-warning fa fa-star"></i></span>
        	       </p1>
            </div>
			<h4 class ="card-title float-left"></h4>
			<p class="card-text">I Spent 4 days with friends who have been visiting frequently in Pokhara. Clean, well maintained, and excellent residents. Food at...</p>
			</div>
			</div>
		 </div>
	 </div>
    </div>
<!--ending user experience-->
<!--Contact us-->
	<div class="section-1" id="contact">
	 <div class="container shadow text-center">
       <h1><span style="color:#196bb2;font-size:48px" >Contact US</span></h1>
        <div class="row">
         
		<div class="col-md-6">
				<p class="contact">Sign Up For Our News Letters</p>
				<br>
				<form  method="post" action="../Controller/ContactController.php" >
					<div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Enter Full Name" id="name" autocomplete="off" required >
                    </div>	
                    <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone.No" id="phone" size="20" autocomplete="off" required >
                    </div>
                    <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email-Address" id="email" size="20" autocomplete="off" required >
                    </div>
                    <input type="submit" name="subscribe" value="Send Now" class="btn btn-primary">	
				</form>
            </div>
<!--ending contact form-->
<div class="col-md-6">
			<h4>Connect With Us</h4>
			<p class="contact"><strong>Phone :</strong>Tel : +977 61467624/467625</p>
			<p class="contact"><strong>Email :</strong> <a href="mailto:name@example.com">LAKEHOTEL@GMAIL.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Lakeside Pokhara Kaski, Nepal</p>
			<div class="social">
	<ul>
	    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
	    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
	    <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
	    <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
	    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
	</ul>
    </div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.8152749646947!2d83.96093181439689!3d28.212924409699966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951d59fdd5c5%3A0xcbc9d1bd37fbd066!2sHotel+Lake+Paradise!5e0!3m2!1sen!2snp!4v1560358187649!5m2!1sen!2snp" width="80%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="clearfix"></div>
	</div>				
	</div>				
</div>				
<!-- Footer -->	
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