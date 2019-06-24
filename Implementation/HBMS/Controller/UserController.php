
<?php
//session_start();
include'../Model/Model_User_Register.php';
include'../Model/User_DBConnection.php';

$insert=new User_Controller();
$insert->UserRegister();

$login=new User_Controller();
$login->user_login();

class User_Controller
{
    
    public function UserRegister()
    {
        
      if(isset($_POST['UserRegister']))
	   {
        $data=array();
		$data['username']=$_POST["uname"];
		$data['pass']=$_POST["pass"];
		$data['address']=$_POST["address"];
		$data['email']=$_POST['email'];
        $data['phoneno']=$_POST["phoneno"];
        
        $user=new model_User_Register();
        $user->insert_user($data);
          
              if($user>0)
              {
                 // echo "Successfully Inserted";
                   echo '<pre>';
                  print_r($user);
                 echo '</pre>';
                 header('location:../View/Register.php');
                  
              }
              else
              {echo "Failed to Inserted";
              }
         }
        }
    /*
    include("connection.php");
		if(isset($_GET['val']))
	{
		if(!empty($_GET['val']))
		{
		$uname = $_GET['val'];
		$query = "select * from userregister where uname = '$uname'";
		$result=mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count>0)
		{
			echo "The Name is Already in Use by an Existing User.Try Another Username:";
		}
		}	
	}*/
    public function user_login()
     {
       if(isset($_POST['login'])) 
       {
           $data=array();
          // $data['id']=$_POST["id"];
           $data['username']=$_POST['uname'];
           $data['pass']=$_POST['pass'];
           
           $login=new Model_User_Register;
           $log=$login->login_check($data);
           $data = mysqli_fetch_array($log);
          // print_r($data);
           $count=mysqli_num_rows($log);
           if($count>0)
           {
             //$abc=mysqli_fetch_assoc($log);
              $_SESSION['pass']=$data['id'];
              $id=$data['id'];
               header("location:../View/userDashboard.php?id=$id");
           }
               else{
                   if(!isset($_COOKIE['attempt']))
                   {
                       setcookie('attempt',1,time()+180);
                   }
                   else{
                       $count=$_COOKIE['attempt']+1;
                       setcookie('attempt',$count,time()+180,'/');
                   }
                  
                   header("location:../View/Register.php?p=0");
               }
           }
       }
    
    public function getUser()
    {
        $get=new model_user_register();
        $getus=$get->getuser(); 
         return $getus;
    }
    
      public function delUser($id)
        {   
          $IDNew=$id;
          $add=new model_user_register();
          $user=$ad->add->deleteuser($INNew);
          return $user;
//            $edit=new model_user_register();
//            $edt=$edit->edituser($id);
//            $row = mysqli_fetch_assoc($edt);
//            return $row;
//          echo "<pre>";
//          print_r($row);
//          echo "</pre>";
      }
}
        ?>  
<!--
   public function updateuser()
      {
          global $connection;
          
         $data=array();
		$data['username']=$_POST["uname"];
		$data['pass']=$_POST["pass"];
		$data['address']=$_POST["address"];
		$data['email']=$_POST['email'];
        $data['phoneno']=$_POST["phoneno"];
     
          $update_user=new Model_User_Register();
          $update_user->Update_User($data,$id);  
      }
      }*/


$a=new User_Controller();
$a->edituser();
-->
