<?php
session_start();
 include('../Model/User_DBConnection.php');
 include('../Model/Model_Admin.php');

$insert=new Admin_Controller();
$insert->AdminLogin();

$login=new Admin_Controller();
$login->admin_login();

 class Admin_Controller
 {
 	public function AdminLogin() 
 	{
 		if(isset($_POST['insert']))
 		{
 			$data=array();
            $data['username']=$_POST['username'];
            $data['password']=$_POST['password'];
             //print_r($_POST)
 			$admin=new model_admin();
 			$addadmin=$admin->insert_admin($data);
//$count=mysqli_num_rows($addadmin);
 			if ($addadmin>0) 
            {
                
                $data = mysqli_fetch_array($addadmin);
//                echo '<pre>';
//                  print_r($user);
                 echo '</pre>'; header("location:../View/UserProfile.php?id=$id");

//                
 			}
            else
 			{
 				echo "Invalid Username and Password";
 			}
 		}
 	}
     public function admin_login()
     {
         if(isset($_POST['Login']))
         {
             $data=array();
             $data['username']=$_POST['username'];
             $data['password']=$_POST['password'];
             print_r($_POST);
             $login=new Model_Admin;
             $log=$login->Login_check($data);
             $count=mysqli_num_rows($log);
             if($count>0)
             {
                  $_SESSION['username']=$data['id'];
                  $data = mysqli_fetch_array($log);
                 //$dat=mysqli_fetch_assoc($abc);
                 header("location:../View/AdminDashboard.php?");
             }
             else
             {
                 echo "invalid username and passwors";
             }
         }
     }
     public function getadmi()
     {
         $get=new model_admin();
         $getad=$get->getadmin();
          return $getad;
//         print_r($getad);
     }
     
     
    public function delAdmin($id)
     {
         $IDNew=$id;
         $ad=new model_admin();
         $admin=$ad->deleteadmin($IDNew);
         return $admin;
     }
     
     
 }
//
//$g=new Admin_Controller();
//$g->getadmi();

//$admdel=new Admin_Controller();
//$admi=$admdel->delAdmin();




?>