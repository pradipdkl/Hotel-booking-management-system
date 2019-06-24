<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Administrator</title>
	<!--<meta name="description" content="">
    <meta name="author" content="">-->
	<!--CSS for all pages-->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="fontawesome-free-5.9.0-web\css\all.css"> 
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

<!--this is for navigation bar-->
 <h1>ADMIN DASHBOARD</h1>
  <div class="container-fluid">
   <div class="row">
   
   <div class="col-md-2">
    <div class="menu">

<ul>
<li><a href="AdminDashboard.php"><span class="fas fa-home"></span>Status</a></li>
  <li><a href="newsletter.php"><span class="fas fa-newspaper"></span>News Letter</a></li>
 <li><a href="Roommanage.php"><span class="fas fa-tasks"></span>Room Manages</a></li>
 <li><a href="payment.php"><span class="fas fa-shopping-cart"></span>Payment</a></li>
 <li><a href="UserProfile.php"><span class="fas fa-users"></span>User Profile</a>
 </li>
 <li><a href="adminlogout.php"><span class="fas fa-sign-out-alt"></span>Logout</a></li>
</ul>
</div>
</div>
   
    <div class="col-md-10 shadow">
<h1>News Letter</h1>
        <div class="conatiner shadow">
          <div class="panel-body">
                <div class="table-responsive">
                   
                   <?php
                        include('../Model/User_DBConnection.php');
                        global $connection;
                         $result=mysqli_query($connection,"SELECT * FROM contact");                     
                    ?>
                        <table id="tabledata" class=" table table-striped table-hover table-bordered">
                            <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                           </tr>
                           <?php 
        while($res = mysqli_fetch_array($result)) {  
?>
        <tr class="text-left">
		<td> <?php echo $res['id'];  ?> </td>
        <td> <?php echo $res['fname'];  ?> </td>
		<td> <?php echo $res['phone'];  ?> </td>
        <td> <?php echo $res['email'];  ?> </td>
         </tr>
   <?php 
   }
   ?>           
        </table>

       </div>
    </div>
    </div>

    
    
    </div>
    </div>
<!--Ending navigation bar-->
        <script>    
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="js/custom-scripts.js"></script>
    </script>

</body>

</html>