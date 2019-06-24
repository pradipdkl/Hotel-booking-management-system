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
            include('../Model/User_DBConnection.php');
            global $connection;
            //$id=$_GET['id'];
            $result=mysqli_query($connection,"SELECT * FROM roombooking");

        ?>
    
    <div class="col-md-10 shadow">
        <h1>Payment Status</h1>
        <div class="conatiner shadow">
        <table id="tabledata" class=" table table-striped table-hover table-bordered">
           <tbody>  
             <th>Name</th>
                 <th>Room Type</th>
                 <th>Bed Type</th>
                 <th>Check In</th>
                 <th>Check Out</th>
                 <th>No Of Room</th>
                 <th>Meal Type</th>
                 <th>Room Price</th>
                 <th>Meal Price</th>
                 <th>Gr.Total</th>
                <th>Status</th>
                <th>Print</th>
                  
<?php 
        while($res = mysqli_fetch_array($result)) {  
?>
    <?php
                                                   
        $troom=$res['troom'];
        
               if($troom =="Superior Room")
                    {
                          $type_of_room = 200;
                    }
                    else if($troom=="Deluxe Room")
                    {
                        $type_of_room = 180;
                    }
                    else if($troom=="Guest House")
                    {
                        $type_of_room = 150;
                    }
                    else if($troom=="Single Room")
                    {
                        $type_of_room = 100;
                    }
            
            
                ?>
                <?php
            $meal=$res['meal'];
            	if($meal=="Room only")
                    {
                        $type_of_meal=0;
                    }
                    else if($meal=="Breakfast")
                    {
                        $type_of_meal=10;
                    }else if($meal=="Half Board")
                    {
                        $type_of_meal=20;

                    }else if($meal=="Full Board")
                    {
                        $type_of_meal=25;
                    }
        ?>        
        <tr class="text-left">
        <td> <?php echo $res['fname']." ".$res['lname'];  ?> </td>
		<td> <?php echo $res['troom'];  ?> </td>
		<td> <?php echo $res['bed'];  ?> </td>
		<td> <?php echo $res['checkin'];  ?> </td>
		<td> <?php echo $res['checkout'];  ?> </td>
		<td> <?php echo $res['nroom'];  ?> </td>
		<td> <?php echo $res['meal'];  ?> </td>
       <td> <?php echo $type_of_room;  ?> </td>
        <td> <?php echo $type_of_meal;  ?> </td>
        <td> <?php echo $Grand_Total=$type_of_room+$type_of_meal;  ?> </td>
        <td><button class='btn btn-success' name="insert" value="insert"><a href=payment.php=".$id ."></a> <i class='fas fa-check' ></i>Insert</button></td>
        <td><a href=print.php?pid=".$id ." <button class='btn btn-primary' name="print"> <i class='fas fa-print' ></i> Print</button></td>
        <?php } ?>
             </tbody>
       </table>
<?php
      include('../Model/User_DBConnection.php');
      global $connection;
      if(isset($_POST['insert']))
      {
            $insertpayment = "INSERT INTO payment('id','fname','lname','troom','bed','checkin','checkout','nroom','meal','roomprice','mealprice','grtotal')VALUES ('$id','$fname','$lname','$troom','$bed','$checkin','$checkout','$nroom','$meal','$type_of_room','$type_of_meal',$Grand_Total)";
        $query=mysqli_query($connection,$insertpayment);
        return $query;
      }
       //else{echo"erreo";}
?>        </div>
       </div>