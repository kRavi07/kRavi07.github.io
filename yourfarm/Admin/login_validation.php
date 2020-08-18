<?php if(!empty($_POST['submit']))
{
  

  if(empty($_POST["mail"]) || empty($_POST["pas"]))
  {
    exit();
  }
   $mail=addslashes($_POST["mail"]);
  $password=addslashes($_POST["pas"]);
   
 


if($password==="yourfarm" && $mail="yourfarm@gmail.com")
{
  header("location:index.html");
  
}
else
{
  echo"<script>alert('Wrong Password')</script>";
   header("location:login.php");
}

}
?>