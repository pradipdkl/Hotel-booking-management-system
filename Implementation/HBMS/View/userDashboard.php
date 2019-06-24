<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Hotel Booking Management system</title>
	<?php
  session_Start();

  if(!isset($_SESSION['pass']))
  {
	  header("location:index.php");
  }
?>
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
	<!--<a href="index.php" class="navbar-brand ml-3">Lake <span style="color:#00E8E8;">Hotel</span></a>-->
	<a  href="index.php"><i class="fa fa-home"></i> Homepage</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" 
	aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle Navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	</nav>
	</header>
	<!--form main heading drama club-->
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
	<p><a href="Logout.php" class="btn btn-danger float-right">Logout</a></p>
		 <form class="form-inline my-2 my-lg-0">
		 
		 
		 
<!--this is for getting data-->
<?php
       include('../Controller/UserController.php');
       if(isset($_GET['userID']))
       {
           $id=$_GET['userID'];
           $usrdel=new User_Controller();
           $userr=$usrdel->delUser($id);
           if($userr>0)
           {
//               echo"deleted";
           }else{
               echo"failed";
           }
       }
       ?>

<!--this is for display update and delete-->

<?php
//including the database connection file
include("../Model/User_DBConnection.php");
//echo $id=$_GET['id']; 
$id = $_SESSION['pass'];
$result = mysqli_query($connection, "SELECT * FROM userregister where id= $id"); // using mysqli_query instead
?>

<div class="container float-left">
 <div class="col-lg-12">
  <br><br>
  <h1 class="text-warning text-center" >TABLE OF USER DATA </h1>
  <br>
  <table  id="tabledata" class=" table table-striped table-hover table-bordered">
   <tr class="bg-dark text-white text-center">
    <th> Id </th>
    <th> Username </th>
    <th> Password</th>
    <th> Address </th>
    <th> Email</th>
	<th> Phone Number</th>
	<th> Delete</th>
	<th> Update</th>
    </tr >
        <?php 
        while($res = mysqli_fetch_array($result)) {  
?>
        <tr class="text-left">
		<td> <?php echo $res['id'];  ?> </td>
        <td> <?php echo $res['uname'];  ?> </td>
        <td> <?php echo $res['password'];  ?> </td>
        <td> <?php echo $res['address'];  ?> </td>
		<td> <?php echo $res['email'];  ?> </td>
		<td> <?php echo $res['phonenumber'];  ?> </td>
        <td> <button class="btn-danger btn"> <a href="userUpdate.php?id=<?php 
		echo $res['id'];?>" class="text-white"> Update </a>  </button> </td>
        <td> <button class="btn-primary btn"> <a href="userDashboard.php?id=<?php 
		echo $res['id']; ?>" onclick="return confirm('Do You Want To Delete User Data?');" class="text-white"> Delete </a> </button> </td>
     </tr>
   <?php 
   }
   ?>
    </table>
    </div>
  </div>
  </div>
  
	</main>
	 <!--bootstrap for pages-->
	   <script src="js/jquery.js"></script>
    <script src="js/bundle.js"></script>
	</body>
</html>




