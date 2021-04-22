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
   
  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
 $sql="SELECT * FROM `user` WHERE `Email`='{$mail}'";
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
$password=md5($password);
$array=$result->fetch_array();

$result->free();
$db->close();
echo $password;

echo $array['Name'];
echo $array['Email'];
echo $array['Mobile'];
echo $array['Password'];


if($password===$array['Password'])
{
   $_SESSION['user_mail']=$array['Email'];
   $_SESSION['user_name']=$array['Name'];
   $_SESSION['user_id']=$array['Id'];
   $_SESSION['user_mobile']=$array['Mobile'];
   echo"<script>alert('Succesfull')</script>";
   
  
}
else
{
     echo      "<script>   
     if (confirm('Wrong Username or password')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; } </script>" ;
    
   
}

}


?>