<?php
 include('../Model/User_DBConnection.php');
 include('../Model/Model_Payment.php');

 $payment=new Payment_Controller();
 $payment->payment();

 class Payment_Controller
 {
 	public function $payment() 
 	{
 		if(isset($_POST['confirm']))
 		{
 			$data=array();
 			$data['title']=$_POST['title'];
 			$data['fname']=$_POST['fname'];
 			$data['lname']=$_POST['lname'];
 			$data['troom']=$_POST['troom'];
 			$data['tbed']=$_POST['bed'];
 			$data['nroom']=$_POST['nroom'];
 			$data['checkin']=$_POST['checkin'];
 			$data['checkout']=$_POST['checkout'];
 			$data['ttot']=$_POST['ttot'];
 			$data['meal']=$_POST['meal'];
 			$data['mepr']=$_POST['mepr'];
 			$data['btot']=$_POST['btot'];
 			$data['fintot']=$_POST['fintot'];           
 			$data['noogdays']=$_POST['days'];           
 			$payment=new Model_Payment();
 			$payment->Insert_payment($data);
 			if ($payment) 
            {
                $type_of_room = 0;       
                    if($troom=="Superior Room")
                    {
                        $type_of_room = 320;

                    }
                    else if($troom=="Deluxe Room")
                    {
                        $type_of_room = 220;
                    }
                    else if($troom=="Guest House")
                    {
                        $type_of_room = 180;
                    }
                    else if($troom=="Single Room")
                    {
                        $type_of_room = 150;
                    }


                    if($bed=="Single")
                    {
                        $type_of_bed = $type_of_room * 1/100;
                    }
                    else if($bed=="Double")
                    {
                        $type_of_bed = $type_of_room * 2/100;
                    }
                    else if($bed=="Triple")
                    {
                        $type_of_bed = $type_of_room * 3/100;
                    }
                    else if($bed=="Quad")
                    {
                        $type_of_bed = $type_of_room * 4/100;
                    }
                    else if($bed=="None")
                    {
                        $type_of_bed = $type_of_room * 0/100;
                    }


                    if($meal=="Room only")
                    {
                        $type_of_meal=$type_of_bed * 0;
                    }
                    else if($meal=="Breakfast")
                    {
                        $type_of_meal=$type_of_bed * 2;
                    }else if($meal=="Half Board")
                    {
                        $type_of_meal=$type_of_bed * 3;

                    }else if($meal=="Full Board")
                    {
                        $type_of_meal=$type_of_bed * 4;
                    }


                    $ttot = $type_of_room * $days * $nroom;
                    $mepr = $type_of_meal * $days;
                    $btot = $type_of_bed *$days;

                    $fintot = $ttot + $mepr + $btot ;
                

 			{
 				echo "invalid insert";
 			}
 		}
 	}
}

?>