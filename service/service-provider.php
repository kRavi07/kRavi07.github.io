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

  

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<style type="text/css">
	body{
		background-color: #dcedc8;
	}
	.card {
    border: none;
    border-radius: 0px;
    background-color: #fff
}

.text1 {
    font-size: 13px;
    color: #cbcbcb
}

.info {
    line-height: 17px
}

.cost span {
    color: #fb3531;
    font-weight: bold;
    font-size: 20px
}

.star {
    color: #FBC02D
}

.watchcost span {
    color: #286783;
    font-weight: bold;
    font-size: 20px
}

.watch {
    background: #286783
}

.tshirtcost span {
    color: #0012b2;
    font-weight: bold;
    font-size: 20px
}

.tshirt {
    background-color: #0012b2
}

.cursor {
    cursor: pointer
}
</style>
</head>
<body>
	<?php require('navbar.php') ?>

<div class="container">
	<div class="row mt-5">
		<div class="col-sm-12">
			<nav aria-label="breadcrumb mt-5">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Service Provider</a></li>
   
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
$status="success";
 $sql=" SELECT * FROM `worker` WHERE  `status`= '{$status}'  ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{

echo "     <div class='card'>
<h5 class='card-header'>
Sorry There is no " .$service. " available  right now. 
We will be available soon.
</h5>
</div>     ";
}

else{	
			while ($array=$result->fetch_array()) 
			{
  $name = $array['Name'];
  $id = $array['id'];
  $w_services = $array['service'];
  $city = $array['City'];
  $state=$array['State'];
  $charge=$array['charge'];
  $img_url =$array['Image'];
  
  
echo "
            <div class='card mt-3'>
                <div class='product-1 align-items-center p-2 text-center'> <img src=".$img_url." class='rounded' width='160' height='160'>
                    <h5>".$name."</h5>
                    <div class='mt-3 info'> <span class='text1 d-block'>".$city."</span> <span class='text1'>".$state."</span> </div>
                    <div class=' cost mt-3 text-dark'> <span> Rs".$charge."</span>
                        <div class='star mt-3 align-items-center'> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> <i class='fa fa-star'></i> </div>
                    </div>
                </div>
                <form action='cart.php' method='POST'>
                <div class='p-3 bg-danger text-center text-white mt-3 cursor'> 
                <input type='text' name='id' value=".$id." style='display:none;'>       
                <input type='submit' value='Get Service' class='btn btn-danger' name='submit'>
                </div>
                </form>
            </div>
        ";


/*echo"<div class='card mt-3'>
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
                            
                </div>";*/
            }
            }


            ?>

   


         
				
</div>
</div>
</div>
</body>
</html>
