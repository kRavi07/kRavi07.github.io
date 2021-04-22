<?php




if(!empty($_POST['signup']))
{ 
  
  $Name=addslashes($_POST['name']);

  $password=md5(addslashes($_POST['pas']));
  
  $mobile=$_POST['mobile'];
  $mail=$_POST['mail'];
 

     $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}

$txt="SELECT * FROM `signup` WHERE `Email`='{$mail}'";
$result=$db->query($txt);
if($result->num_rows===0)
{
  $sql= "INSERT INTO signup values('$Name','$password','$mobile','$mail')";

  $db->query($sql);
  if($db->error)
  {
    echo $db->error;
    
  }
  
  $stmt= "INSERT INTO user_detail values('$mail',' ',' ',' ','','','',' ',' ','')";
  $result=$db->query($stmt); 
   echo "<script>
            if (confirm('Signup Successfull')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";
    //header("location:index.php");
    
  
}
else
 echo "<script>
            if (confirm('User alredy exist')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";

  //header("location:index.php");
}




?>