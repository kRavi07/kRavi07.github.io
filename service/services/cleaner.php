<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Electricians</title>
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


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="validate-password/css/jquery.passwordRequirements.css">

  <link rel="stylesheet" type="text/css" href="css/login.css">

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style type="text/css">
	body{
		background-color: #dcedc8;
	}
	.card 
	{
		box-shadow: 2px 2px 2px #000;
	}
</style>
</head>
<body>
	<?php require('../navbar.php') ?>

<div class="container">
	<div class="row mt-5">
		<div class="col-sm-12">
			<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Service</a></li>
    <li class="breadcrumb-item active" aria-current="page">Cleaner</li>
  </ol>
</nav>
		</div>
		<div class="col-sm-12">
		<div class='card-columns'>	
   

   <?php 
   $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
$status = "success";
$service="cleaner";
  
 $sql=" SELECT * FROM `worker` WHERE `service`='{$service}' AND `status`= '{$status}'  ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{
echo "     <div class='alert alert-danger'>
  <strong>Sorry!</strong> There is no cleaner available at your location right now.
  We will be available soon.
</div>     ";}

	else{	
			while ($array=$result->fetch_array()) {
  $name = $array['Name'];
  $id = $array['id'];
  $w_services = $array['service'];
  $city = $array['City'];
  $state=$array['State'];
  $img_url =$array['Image'];
  
  

echo"
            
				<div class='card mt-3'>
				 <div class='row'>
				 <div class='col-sm-12 mx-auto'>
                 <form action='cart.php' method='POST'>
                   <img class='img-fluid ml-5 mt-3' alt='100%x280' src=".$img_url." style='height:12rem;width: 70%; '>
                  </div> 
                 </div>  
                           <div class='card-body'>
                        	<p class='card-text'>Lorem ipsum dolor sit amet, consectetur 
                                    	quis nost</p>
                            <h4 class='card-title text-center'>".$name."</h4>
                            <i class='bi-marker'></i><h6>City : ".$city."</h6>
                            <i class='bi-marker'></i><h6>State : ".$state."</h6>
                           
                             <h6 class=''>Service Charge : Rs 12 </h6>
                             <h6 class=''>5 star Rating : 5 </h6>
                             <h6 class=''>Service Done :</h6>
                           
                     <input type='text' name='id' value=".$id." style='display:none;'>       
                     <input type='submit' value='Hire Now' class='btn btn-outline-success ml-5 mt-2' name='submit'>                   
                  </form>
                            </div>
                            
                </div>";}
            }
           
        ?>        
				
		</div>
	</div>
</div>
</body>
</html>