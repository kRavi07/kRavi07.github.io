<?php
session_start();
if(isset( $_SESSION['mail'] && $_SESSION['mob']))
{
	if(isset($_POST['resetPas']))
		{  $email=$_SESSION['mail']
			$pas=$_POST['newPas'];
             $sql= "UPDATE `signup` SET `Password`='".$pas."' WHERE `Email`='".$email."' ";
             $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
	      echo"<script>alert('Password Reset successfull')</script>";
}

        }
}
?>