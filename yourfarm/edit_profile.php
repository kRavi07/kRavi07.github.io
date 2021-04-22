<?php
session_start();
 if(empty($_SESSION['mail']))
 {
  echo "<script>
            if (confirm('Please Login first')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";
 }

    $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}
$mail=$_SESSION['mail'];
$F_name=$_POST['F_name'];
$M_name=$_POST['M_name'];
$L_name=$_POST['L_name'];
$add1=$_POST['add_1'];
$add2=$_POST['add_2'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$cntry=$_POST['country'];

  $sql= "UPDATE `signup` SET `F_name`='".$F_name."' ,
      `S_name`='".$M_name."',
      `L_name`='".$L_name."',
      `add1`='".$add1."',
      `add2`='".$add2."',
      `city`='".$city."',
      `state`='".$state."',
      `pin`='".$pin."',
      `country`='".$cntry."'

      WHERE `Email`='".$mail."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
?>