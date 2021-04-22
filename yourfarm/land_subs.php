<?php
session_start();

if(isset($_POST['submit']))
{
    $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}
$name = $_POST['name'];
$mob= $_POST['mob'];
$mail = $_POST['mail'];
$qry = $_POST['qry'];

$sql = "INSERT INTO `land_sub` (Name,Mobile,EMail,query) values('$name','$mob','$mail','$qry')";
$result=$db->query($sql);
if($db->error)
{
	echo $db->error;
}
echo "    <script>   
     if (confirm('Thanks for your query . We will contact you soon .You can visit our office for more details.')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; } </script>" ;
    
}

?>