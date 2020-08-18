<?php
session_start();
if(empty($_POST['reset']))
{
  echo "not set"; 
}
else
{
  echo "success";
  if(empty($_POST["email"]) || empty($_POST["mob"]) || empty($_POST['newPas']) )
  {
    exit();
  }
    echo "working";
   $mail=addslashes($_POST['email']);
  $mob=addslashes($_POST['mob']);
   
  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}




$sql="SELECT * FROM `signup` WHERE `Email`='{$mail}' AND `Mobile`='{$mob}' ";
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
    $sql= "UPDATE `signup` SET `Password`='".$pas."' WHERE `Email`='".$mail."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
        echo"<script>
            if (confirm('Success')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";

}

}
}
}

  
?>