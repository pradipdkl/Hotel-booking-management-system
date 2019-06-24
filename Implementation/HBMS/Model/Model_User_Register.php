<?php
include('User_DBConnection.php');

class model_user_register
{
public $uname;
public $pass;
public $address;
public $email;
public $phoneno;
public function insert_user($data)
{
          global $connection;

        //  $usernameCheck='select * from userregister where username="'.$data['username'].'" ';
        //  $query=mysqli_query($connection,$usernameCheck);
        //    
        //  if(mysqli_num_rows($query))
        //  {
        //  echo "user already taken";
        //  exit();
        //  }
        //  else{
            $ssql='insert into userregister set 
                    uname="'.$data['username'].'",
                    password="'.$data['pass'].'",
                    address="'.$data['address'].'",
                    email="'.$data['email'].'",
                    phonenumber="'.$data['phoneno'].'" 
                    ';
            $query=mysqli_query($connection,$ssql);
            return $query;
         // }
        }
    
    
    
        public function login_check($data)
        {
        global $connection;
        $SelectUser='select * from userregister where uname="'.$data['username'].'" and password="'.$data['pass'].'" ';

        $query=mysqli_query($connection,$SelectUser);

            return $query;

        }
    public function deleteuser($id)
    {
        global $connection;
        $deletequery='delete from userregister where id="'.$id.'"';
        $exec=mysqli_query($connection,$deletequery);
        return $exec;
    }
    
    public function getuser()
    {
        global $connection;
        $sqll='select * from userregister';
        $exec=mysqli_query($connection,$sqll);
        return $exec;
    }
    /*
    public function edituser($id)
      {
          global $connection;
          $adminQuery='select * from userregister
                    where id="'.$id.'" 
                    ';
           $query=mysqli_query($connection,$adminQuery);
          return $query;  
      }
    
    
    
    public function Update_User($data,$id)
    {
    global $connection;

    $UpdateQuery='update userregister
                  set
                   username="'.$data['username'].'",
                   password="'.$data['pass'].'",
                   address="'.$data['address'].'",
                   email="'.$data['email'].'",
                   phonenumber="'.$data['phonenumber'].'"
                   where id="'.$id.'"
                  ';
    }*/
}
?>