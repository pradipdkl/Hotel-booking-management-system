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
    <link href="css/datepicker.css" rel="stylesheet" type="text/css"/> 
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    <a  href="index.php"><i class="fas fa-home"></i> Homepage</a>
                    </li>
					</ul>
            </div>
        </nav>
<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row shadow">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <br>
                        <br>
                        <div class="panel-body form">
						<form method="POST" action="../Controller/ReservationController.php">
                            <div class="form-group">
                            <label>Title*</label>
                            <select name="title" class="form-control" required >
                                <option value selected ></option>
                                <option value="Dr.">Dr.</option>
                                <option value="Miss.">Miss.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Prof.">Prof.</option>
                                <option value="Rev .">Rev .</option>
                                <option value="Rev . Fr">Rev . Fr .</option>
                            </select>
                              </div>
							  <div class="form-group">
                                <label>First Name</label>
                                <input name="fname" class="form-control" placeholder="Enter your Firstname" autocomplete="off" required>
                               </div>
							   <div class="form-group">
                                <label>Last Name</label>
                                <input name="lname" class="form-control" placeholder="Enter your Lastname" autocomplete="off" required>
                               </div>
							   <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" id="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required>
                               </div>
							   <div class="form-group">
                                <label>Nationality::</label>
                                <label class="radio-inline">
                                    <input type="radio" name="nation"  value=" Nepalese" checked="">Nepalese</label>
                                <label class="radio-inline">
                                    <input type="radio" name="nation"  value="Non Nepalese ">Non Nepalese
                                </label>
                                </div>
                                <?php
								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
								?>
            <div class="form-group">
            <label>Country</label>
            <select name="country" class="form-control" autocomplete="off" required>
            <option value selected ></option>
            <?php
            foreach($countries as $key => $value):
            echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
            endforeach;
            ?>
            </select>                   
             <div class="form-group">
            <label>Phone Number</label>
            <input name="phone" type ="text" id="phone" class="form-control" placeholder="Enter your Phone.no" autocomplete="off" required>
            </div>
            </div>
            </div>
            </div>
            </div>
    <div class="col-md-6 col-sm-6 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
             RESERVATION INFORMATION
             </div>
             <br>
             <br>
            <div class="panel-body form">
            <div class="form-group">
              <label>Type Of Room *</label>
              <select name="troom"  class="form-control" required>
                <option value selected ></option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
                <option value="Guest House">GUEST HOUSE</option>
                <option value="Single Room">SINGLE ROOM</option>
              </select>
            </div>
            <div class="form-group">
            <label>Bedding Type</label>
            <select name="bed" class="form-control" required>
                <option value selected ></option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Triple">Triple</option>
                <option value="Quad">Quad</option>
                <option value="None">None</option>
            </select>
            </div>
            <div class="form-group">
            <label>No.of Rooms *</label>
             <select name="nroom" class="form-control" required>
                <option value selected ></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
             </select>
            </div>
            <div class="form-group">
            <label>Meal Plan</label>
            <select name="meal" class="form-control"required>
                <option value selected ></option>
                <option value="Room only">Room only</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Half Board">Half Board</option>
                <option value="Full Board">Full Board</option>
            </select>
            </div>
            <div class="form-group">
            <label>Check-In</label>
            <input name="checkin" id="mycal" type ="date" class="form-control datepicker">
            </div>
           <div class="form-group">
            <label>Check-Out</label>
            <input name="checkout" id="checkout" type ="date" class="form-control">
           </div>
 </div>
 </div>
 </div>
           <div class="col-md- col-sm-12 shadow">
            <div class="well">
            <h4>HUMAN VERIFICATION</h4>
            <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
            <p>Enter the random code</p> <br>
            <input  type="text" name="code1" title="random code" autocomplete="off"/>
            <input type="hidden" name="code"  value="<?php echo $Random_code; ?>" />
            <br>
            <br>
             <button type="submit" class="btn btn-primary" name="Booking">Booking</button>
           </div>
    </div>
 </div>
 </div>
 </div>
 </div>
</main>


<!--form validation
   <script type="text/javascript">
       function validation(){
           
          var emails = document.getElementById('email').value; 
          var phoneno = document.getElementById('phone').value;
           
           if(emails==''){
               document.getElementById('email').innerHTML="enter proper email address";
           }
            if (emails.indexOf('@') <= 0) {
                document.getElementById('email').innerHTML = "**Invalid Email Address @";
                return false;
            }
            if (emails.charAt(emails.length - 4) != '.') {
                document.getElementById('email').innerHTML = "**Invalid Email Address .";
                return false;
            }
            if (phoneno == '') {
                document.getElementById('phone').innerHTML = "** Enter your contact number";
            } else if (isNaN(phone)) {
                document.getElementById('phone').innerHTML = "** please enter number only!!";
            } else if ((phoneno.charAt(0) !9) && (phone.charAt(1) !7) && (phone.charAt(2) !7)) {
                document.getElementById('phone').innerHTML = "** mumber must be start with 977";
            } else {
                return false;
            }
           
       }
    </script>-->
       <script src="js/jquery-3.4.1" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery-ui.css" type="text/javascript"></script>

</body>
</html>
