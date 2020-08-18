<?php

session_start();



if(!empty($_POST['submit']))
{
  

  if(empty($_POST["mail"]) || empty($_POST["pas"]))
  {
    exit();
  }
   $mail=addslashes($_POST["mail"]);
  $password=addslashes($_POST["pas"]);
   
  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}
 $sql="SELECT * FROM `admins` WHERE `Email`='{$mail}'";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}
//comapre password
$password=md5($password);/*md5*/
$array=$result->fetch_array();
$result->free();
$db->close();

if($password===$array['Password'])
{
   $_SESSION['admin_mail']=$array['Email'];
   
   
   echo"<script>alert('Succesfull')</script>";
   header("location:admin_dashboard.php");
  
}
else
{
     echo      "<script>   
     if (confirm('Wrong Username or password')) {
              window.location='admin_login.php';
                         }  
                         else
                         { window.location='admin_login.php'; } </script>" ;
    
   
}

}


?>

