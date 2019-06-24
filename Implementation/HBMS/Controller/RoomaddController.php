<?php
 include('../Model/User_DBConnection.php');
 include('../Model/Model_Roomadd.php');

 $addroom=new Roomadd_Controller();
 $addroom->addroom();

 class Roomadd_Controller
 {
 	public function addroom() 
 	{
 		if(isset($_POST['addroom']))
 		{
 			$data=array();
            //$data['id']=$_POST['id'];
 			$data['rtype']=$_POST['troom'];
 			$data['bedding']=$_POST['bed'];
 			$data['place']='FREE';
            
 			$addroom=new Model_Roomadd();
 			$addroom->Insert_addRoom($data);
            $count=mysqli_num_rows($log);       
 			if ($addroom) {
                            
//            $_SESSION['pass']=$data['id'];
//            $id=$data['id'];
            
 				echo '<script>alert("New Room Added") </script>' ;
                 header('location:../View/Roommanage.php');
                
 			}else
 			{
 				echo "Failed To Add Room";
 			}
 		}
 	}
         
}

?>