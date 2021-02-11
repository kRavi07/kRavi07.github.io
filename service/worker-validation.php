
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
 $sql="SELECT * FROM `worker` WHERE `Email`='{$mail}'";
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




if($password===$array['Password'])
{
   $_SESSION['worker_id']=$array['id'];
   $_SESSION['worker_mail']=$array['Email'];
   $_SESSION['worker_image']=$array['Image'];
   $_SESSION['worker_name']=$array['Name'];
   $_SESSION['worker_service']=$array['service'];
   $_SESSION['worker_mobile']=$array['Mobile'];
   header("location:worker-profile.php");
   
  
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

