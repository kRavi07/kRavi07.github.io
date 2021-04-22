<?php
session_start();
if(empty($_POST['reset']))
{
  echo "not set"; 
}
else
{
  echo "success";
  if(empty($_POST["email"]) || empty($_POST["mob"]) || empty($_POST['newPas']) || empty($_POST['Nmob']) )
  {
    exit();
  }
    

  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}
$new_mail=addslashes($_POST['Nmob']);
   $mail=addslashes($_POST['email']);
  $mob=addslashes($_POST['mob']);
   $pass=md5($_POST['newPas']);
   




$sql="SELECT * FROM `signup` WHERE `Email`='{$mail}' AND `Password`='{$pass}' ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  else
  {
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}
else
{  $pas=md5($_POST['newPas']);
    $sql= "UPDATE `signup` SET `Mobile`='".$Nmob."' WHERE `Email`='".$mail."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
        echo"<script>
            if (confirm('Success')) {
              window.location='myprofile.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";

}

}
}
}

  
?>