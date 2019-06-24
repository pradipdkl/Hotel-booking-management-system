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
 <li><a href="adminlogout.php"><span class="fas fa-sign-out-alt"></span>Logout</a></li>
</ul>
</div>
</div>
   
   
<!--this is for room manage table-->
<div class="col-md-10 shadow">
<h1>Room Manage</h1>
        <div class="conatiner shadow">
          <div class="panel-body">
                <div class="table-responsive">
                   <div class="col-md-5 float-left">
                       <h1>Add New Room</h1>
                       <form method="POST" action="../Controller/RoomaddController.php">
                            <div class="form-group">
                                <label>Type Of Room *</label>
                                <select name="troom"  class="form-control" required>
                                    <option value selected ></option>
                                    <option value="Superior Room">SUPERIOR ROOM</option>
                                    <option value="Deluxe Room">DELUXE ROOM</option>
                                    <option value="Guest House">GUEST ROOM</option>
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
                                        <option value="Triple">None</option>
                                    </select>
                               </div>
							 <input type="submit" name="addroom" value="Add New Room" class="btn btn-primary"> 
							</form>
                   <br>
                   <!--this is for delete room-->
   <div class="container">
       <h1>Delete Room</h1>
       <form method="POST" action="">
        <div class="form-group">
        <label>Select Room ID *</label>
          <?php
            include ('../Model/User_DBConnection.php'); 
            $results = mysqli_query($connection,"select * from addroom");
           ?>
        <select name="id"  class="form-control" required>
            <option value selected ></option>
            <?php
            while($res=mysqli_fetch_array($results))
            {
            $value = $res['id'];
             echo '<option value="'.$value.'">'.$value.'</option>';
            }
            ?>
        </select>
          </div>
         <input type="submit" name="delroom" value="Delete Room" class="btn btn-primary"> 
        </form>
        
        <?php
         include('../Model/User_DBConnection.php');

         if(isset($_POST['delroom']))
         {
            $did = $_POST['id'];
            $sql ="DELETE FROM addroom WHERE id = '$did'" ;
            if(mysqli_query($connection,$sql))
            {
             echo '<script type="text/javascript">alert("Delete the Room") </script>' ;
                    header("Location: roomdel.php");
            }else {
                echo '<script>alert("Sorry ! Check The System") </script>' ;
            }
         }
        ?>
   </div>
</div> 
   <!--This is for room information table-->
                   <div class="col-md-5 float-right">
                        <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
                        include('../Model/User_DBConnection.php');
                        global $connection;
						$result = mysqli_query($connection,"select * from addroom order by id LIMIT 10");
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
											<th>Bedding</th>
											<th>Place</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
								      while($res= mysqli_fetch_array($result))
										{
                                           ?>
                                        <tr class="text-center">
		                               <td> <?php echo $res['id'];  ?> </td>
                                      <td> <?php echo $res['rtype'];  ?> </td>
                                      <td> <?php echo $res['bedding'];  ?> </td>
                                       <td> <?php echo $res['place'];  ?> </td>										
										<?php
                                        }
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                       </div>
                    </div>
                   </div>
      </div>
       </div>
       </div>
    </div>
    </div>
    </div>
<!--Ending navigation bar-->    
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
    


</body>

</html>