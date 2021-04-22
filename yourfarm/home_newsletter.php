<?php
session_start();

If(isset($_POST['submit']))
{
  $s_email=$_POST['subs'];

$db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}



$sql=" INSERT INTO `subscriber` (Email)  values('$s_email')  ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  
echo"<script>
            if (confirm('Thanks for subscribing Us')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";

 //header("location:profile.php");
}
?>
