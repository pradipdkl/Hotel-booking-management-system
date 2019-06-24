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
 <li><a href="Roommanage.php"><span class="fas fa-tasks"></span>Room Manages</a>
 <li><a href="payment.php"><span class="fas fa-shopping-cart"></span>Payment</a></li>
 <li><a href="UserProfile.php"><span class="fas fa-users"></span>User Profile</a>
 <li><a href="adminlogout.php"><span class="fas fa-sign-out-alt"></span>Logout</a></li>
</ul>
</div>
</div>
<?php
       include('../Controller/AdminLoginController.php');
       
       
       if(isset($_GET['adminID']))
       {
           $id=$_GET['adminID'];
           $admdel=new Admin_Controller();
           $admi=$admdel->delAdmin($id);
           if($admi>0)
           {
//               echo"deleted";
           }else{
               echo"failed";
           }
       }
       ?>
<!--this is for admin account setting-->
<div class="col-md-10 shadow">
    <div class="panel panel-default">
        <div class="panel-body">
        <h1>ADMINISTRATOR <small> Accounts </small></h1>
        <div class="table table-striped table-bordered table-hover">
           <div class="table-responsive">
                <?php
                include('../Model/User_DBConnection.php');
                global $connection;
              //$id=$_GET['id'];
                $result=mysqli_query($connection,"SELECT * from admin");                     
                ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Update</th>
                <th>Remove</th>
                </tr>
                </thead>
                <tbody>
                <?php
            while($res = mysqli_fetch_array($result)) {  
            ?>
                <td> <?php echo $res['id'];  ?> </td>
                <td> <?php echo $res['username']; ?> </td>
                <td> <?php echo $res['password']; ?> </td>
                
                <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal']>Update</button></td>
                <td><button class='btn btn-danger'> <i class='fas fa-edit' ></i><a href="UserProfile.php?adminID=<?php echo $res['id']; ?>" onclick="return confirm('Do You Want To Delete Admin Account?');"  class="text-white">Delete</a></td>
              
               </tr>
                <?php 
                }
                ?>           
            </tbody>
            </table>
            </div>
            </div>
            <br>
            <div class="panel-body">
            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">Add New Admin</button>
              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                   </div>
                   <form method="post" action="../Controller/AdminLoginController.php">
                    <div class="modal-body">
                      <div class="form-group">
                       <label>Add new User name</label>
                         <input name="username"  class="form-control" placeholder="Enter User name" autocomplete="off">
				      </div>
				    </div>
				<div class="modal-body">
                  <div class="form-group">
                    <label>New Password</label>
                     <input name="password" type="password" class="form-control" placeholder="Enter Password" autocomplete="off">
				 </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    <input type="submit" name="insert" value="Add Admin" class="btn btn-primary">
				</div>
				</form>
				</div>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>
<!-- this is for admin update in form-->
           <div class="panel-body">
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Change the Username and Password</h4>
                            </div>
                            <form method="post" action="../">
                            <div class="modal-body">
                                <div class="form-group">
                                <label>Change User name</label>
                                <input name="username" value="<?php echo $res["username"]; ?>" class="form-control" placeholder="Enter User name" autocomplete="off">
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                <label>Change Password</label>
                                <input name="password" value="<?php echo $res['password']; ?>" class="form-control" placeholder="Enter Password" autocomplete="off">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                               <input type="submit" name="update" value="Update" class="btn btn-primary">
                                </div>
                              </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
			 <!-- /. PAGE INNER  -->
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="js/custom-scripts.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
    </body>
</html>