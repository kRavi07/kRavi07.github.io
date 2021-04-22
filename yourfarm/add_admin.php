<?php
session_start();

     $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");

}




if(isset($_POST['submit']))
{ 
$sec_code =	"yourfarm@add_admin";
  
$code = $_POST['code'];
if($code!=$sec_code)
{
echo $code;
echo "fail ";
}
  $mail=addslashes($_POST['mail']);

  $password=md5(addslashes($_POST['pas']));
  
  
 


$txt="SELECT * FROM `admins` WHERE `Email`='{$mail}'";
$result=$db->query($txt);
if($result->num_rows===0)
{
  $sql= "INSERT INTO admins values('$mail','$password')";

  $db->query($sql);
  if($db->error)
  {
    echo $db->error;
    
  }
  
   echo "<script>
            if (confirm('Admin added Successfull')) {
              window.location='admin_login.php';
                         }  
                         else
                         { window.location='admin_login.php'; }                 

        </script>";  
   
    
  
}
else
{
	
 echo "<script>
            if (confirm('Admin alredy exist')) {
              window.location='admin_login.php';
                         }  
                         else
                         { window.location='admin_login.php'; }                 

        </script>"; 
        echo $db->error;
}
  
}

echo "wrong";
?>


