<?php
include ('../Model/User_DBConnection.php');
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM admin WHERE id ='$id'";
			if(mysqli_query($connection,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
				}
			header("Location:UserProfile.php");
?>


