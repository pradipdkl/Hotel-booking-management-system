<?php
  include('User_DBConnection.php');
  class model_admin
  {
  	public $username;
  	public $password;
  	public function insert_admin($data)
  	{
  		global $connection;
  	    $insert_query='insert into admin set username="'.$data['username'].'" ,
        password="'.$data['password'].'" ';
        $query=mysqli_query($connection,$insert_query);
        return $query;
  	}            
      
  
  public function Login_check($data)
  {
      global $connection;
      $Login_check='select * from admin where username="'.$data['username'].'" and
        password="'.$data['password'].'" ';
      $query=mysqli_query($connection,$Login_check);
      return $query;
  }
      public function deleteadmin($id)
      {
           global $connection;
          $sql='delete from admin where id="'.$id.'" ';
          $exec=mysqli_query($connection,$sql);
          return $exec;
      }
      
      
      public function getadmin()
      {
           global $connection;
          $sql='select * from admin';
          $exec=mysqli_query($connection,$sql);
          return $exec;
      }
          
  }
?>