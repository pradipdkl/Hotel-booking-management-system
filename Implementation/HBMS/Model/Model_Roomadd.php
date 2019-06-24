<?php
  include('User_DBConnection.php');
  class Model_Roomadd
  {
  	public $rtype;
  	public $bedding;
  	public $place;
  	public function Insert_addRoom($data)
  	{
  		global $connection;
        
  	    $addRoom_query='insert into addroom
        set
        rtype="'.$data['rtype'].'",
        bedding="'.$data['bedding'].'",
        place="'.$data['place'].'"
        ';
        
           $query=mysqli_query($connection, $addRoom_query);
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