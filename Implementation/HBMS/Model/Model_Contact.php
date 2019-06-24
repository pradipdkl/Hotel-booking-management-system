<?php
  include('User_DBConnection.php');
  class Model_Contact
  {
  	public $fname;
  	public $phone;
  	public $email;
  	public function Insert_contact($data)
  	{
  		global $connection;
        
  	    $contact_query='insert into contact
        set
        fname="'.$data['fname'].'",
        phone="'.$data['phone'].'",
        email="'.$data['email'].'"
        ';
        
           $query=mysqli_query($connection, $contact_query);
  	}
      
    public function Newsletterdel($id)
    {
        global $connection;
        
        $deletequery= 'delete from contact where id=$id';
        $query=mysqli_query($connection, $deletequery);
        return $query;
    }   
  }
?>