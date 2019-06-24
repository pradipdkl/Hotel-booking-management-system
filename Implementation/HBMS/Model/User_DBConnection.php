<?php
  $hostname="localhost";
  $username="root";
  $password="";
  $db_name="hbms";
$connection=mysqli_connect($hostname,$username,$password,$db_name);
if($connection->connect_error)
{
    die("Conneection Failed: " . $connection->connect_error);
}

?>