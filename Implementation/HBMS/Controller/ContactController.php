<?php
 include('../Model/User_DBConnection.php');
 include('../Model/Model_Contact.php');

 $contact=new Contact_Controller();
 $contact->contact();

 class Contact_Controller
 {
 	public function contact() 
 	{
 		if(isset($_POST['subscribe']))
 		{
 			$data=array();
            $data['id']=$_POST['id'];
 			$data['fname']=$_POST['fname'];
 			$data['phone']=$_POST['phone'];
 			$data['email']=$_POST['email'];
            
 			$contact=new Model_Contact();
 			$contact->Insert_contact($data);
 			if ($contact) {
 				echo "successfully subscribe";
 			}else
 			{
 				echo "subscribe fail";
 			}
 		}
 	}
  public function DeleteNewsletter( $del)
  {
        $id = $_GET['id'];
        $Newsletterdelete=new Model_Contact();
            $result=$Newsletterdelete->Newsletterdel($id);
            return $result;
    }
}

?>