<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$user_id=$_SESSION['user_id'];
$user_mail=$_SESSION['user_mail'];
  


  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


} 
 $sql="SELECT * FROM `user` WHERE `Email`='{$user_mail}' AND `Id`='{$user_id}' ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}

$array=$result->fetch_array();

$result->free();



$user_name=$array['Name'];

$user_mobile= $array['Mobile'];




//Reset Password 





 if(isset($_POST['userResetPassword']))
 {  
  
 $oldPass=md5($_POST['userOldPas']);
 $newPass=md5($_POST['userNewPas']); 
$sql="SELECT * FROM `user` WHERE `Id`='{$user_id}'";
$result=$db->query($sql);
 if($db->error)
{
    echo $db->error;
    
}
  
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}
else
{


$array=$result->fetch_array();
$result->free();


if($oldPass!=$array['Password'])
{
  echo "<script>alert('Please enter correct old password')</script>";
  
}
else if($newPass==$array['Password'])
{
  echo "<script>alert('New Password cannot be same as old')</script>";

}
 
else {
    
   $sql= "UPDATE `user` SET `Password`='".$newPass."' WHERE `Id`='".$user_id."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
        echo"<script>
            alert('Password Changed Successfull');
        </script>";

      }

 }
}
}     
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="fontawesome/webfonts">
<script type="text/javascript" src="fontawesome/js/all.js"></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
<style type="text/css">
body {
    background: 
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}
</style>
</head>
<body>
	
<div class="row bg-light">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold"> <?php echo $user_name ;?> </span><span class="text-black-50"> <?php echo $user_mail; ?> </span><span>United States</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fas fa-long-arrow-alt-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Reset Password</h6>
                </div>
                <form action="" method="POST">
                <div class="row mt-2">
                    <div class="col-md-6">
                      <label for="userForgetPasEmail">Email</label>
                    	<input type="text" class="form-control" name="userfirstName" placeholder="first name" value= <?php echo $user_mail ;?> >
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <label for="userOldPas">Enter your password</label>
                    	<input type="password" class="form-control"name="userOldPas" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <label for="userNewPas">Enter New Password</label>
                      <input type="password" class="form-control" name="userNewPas" placeholder="" id="res" >
                    </div>
                    
                </div>
                
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="userResetPassword">Reset Paasword</button>
                </div>
              </form>
            </div>
        </div>
    </div>
   
</body>
</html>

