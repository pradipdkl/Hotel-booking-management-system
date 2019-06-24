<?php
include('../Model/Model_Reservation.php');
include('../Model/User_DBConnection.php');

$book=new Reservation_Controller();
$book->Reservation();

class Reservation_Controller
{
	public function Reservation()
	{
		if(isset($_POST['Booking']))
         {
          $data=array();
          $data['title']=$_POST["title"];
          $data['fname']=$_POST["fname"];
          $data['lname']=$_POST["lname"];
          $data['email']=$_POST["email"];
          $data['nation']=$_POST["nation"];
          $data['country']=$_POST["country"];
          $data['phone']=$_POST["phone"];
          $data['troom']=$_POST["troom"];
          $data['bed']=$_POST["bed"];
          $data['nroom']=$_POST["nroom"];
          $data['meal']=$_POST["meal"];
          $data['checkin']=$_POST["checkin"];
          $data['checkout']=$_POST["checkout"];
          
            
          $book=new model_reservation();
          $book->insert_reservation($data);
    //$count=num_rows($con);
           if($book>0)
              {
             echo "<script type='text/javascript'> alert('Successfully Room Added')</script>";
              
               header('location:../View/reservation.php');
           }else
           {
            echo "failed to Reservation";
            }

        }
	}
}

?>