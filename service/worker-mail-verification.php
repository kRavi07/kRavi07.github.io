<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>	
</head>
<body>

</body>
</html>

<?php
if(!empty($_POST['verify']))
{
	$email=$_POST['d_mail'];
     $otp=$_POST['otp'];
     $s="verified";
     $n="not verified";

     if($_SESSION['worker_otp']===$otp)
     {
     	if($_SESSION['worker_mail']=$email)
     	{
     		echo "<div class='alert alert-success'>
                                     <strong>Verification succesfull </strong>
                                    </div>";
    
     		 $db = @new mysqli("localhost", "root", "" ,"service"); 

             if($db->connect_error)
                 {
                     exit("Connection failure");


                  }
              else
              {
              	     $sql= "UPDATE `worker` SET `otp`='".$s."' WHERE `Email`='".$email."' ";
                     $result=$db->query($sql);
                       if($db->error)
                           {
                              echo "<div class='alert alert-danger'>
                                     <strong>Error</strong>Something went Wrong ! Try Again
                                    </div>";
    
                           }

              }    
     	}
     	else
     	{
     		header("location:worker-register.php");
     	}
     }
     else
     {
     	echo "Something Went Wrong Try Again";
     }

}
else
{
	echo "not set";
}
?>