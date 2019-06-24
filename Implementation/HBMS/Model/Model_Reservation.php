<?php
include('User_DBConnection.php');

class model_reservation
{
	public $title;
	public $fname;
	public $lname;
	public $email;
	public $nation;
	public $country;
	public $phone;
	public $troom;
	public $bed;
	public $nroom;
	public $meal;
	public $checkin;
	public $checkout;
    
	public function insert_reservation($data)
	{
		global $connection;

		$reservation_query= 'insert into roombooking
		         set
                 title="'.$data['title'].'",
                 fname="'.$data['fname'].'",
                 lname="'.$data['lname'].'",
                 email="'.$data['email'].'",
                 national="'.$data['nation'].'",
                 country="'.$data['country'].'",
                 phone="'.$data['phone'].'",
                 troom="'.$data['troom'].'",
                 bed="'.$data['bed'].'",
                 nroom="'.$data['nroom'].'",
                 meal="'.$data['meal'].'",
                 checkin="'.$data['checkin'].'",
                 checkout="'.$data['checkout'].'"
		         ';
          $query=mysqli_query($connection,$reservation_query);
        return $query;
         
	}
}

?>