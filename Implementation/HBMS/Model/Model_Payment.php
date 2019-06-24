<?php
  include('User_DBConnection.php');
  class Model_Payment
  {
  	public $title;
  	public $fname;
  	public $lname;
  	public $troom;
  	public $tbed;
  	public $nroom;
  	public $checkin;
  	public $checkout;
  	public $ttot;
  	public $fintot;
  	public $mepr;
  	public $meal;
  	public $btot;
  	public $noofdays;
  	public function Insert_payment($data)
  	{
  		global $connection;
        
  	    $payment_query="INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
           $query=mysqli_query($connection, $payment_query);
  	} 
  }
?>