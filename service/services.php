<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEh5Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/services.css">	
</head>
<body>
<?php require('navbar.php')?>
<div class="container px-3 mt-5" >
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-success text-center mt-5">Our Services</h1>
		</div>
		<div class="col-sm-12 mt-5">
			<div class="card-columns">

<?php 
   $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
$status = "success";
$service="cleaner";
  
 $sql=" SELECT * FROM `services`   ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{
echo "     <div class='alert alert-danger'>
  <strong>Sorry!</strong> .
  We will be available soon.
</div>     ";}

	else{	
			while ($array=$result->fetch_array()) {
  $name = $array['title'];
  $id = $array['id'];
  $detail = $array['detail'];
  
  $img_url =$array['image'];


echo "


				<div class='card'>
				<form action='worker.php' method='POST'>
					<div class='card-body'>
						<div class='col-sm-12 ml-5'>
							<img class='img-fluid' style='height:10rem; width:10rem; border-radius:50%' src=".$img_url.">
						</div>
						<div class='col-sm-12 mx-auto'>
							<h5 class=''>".$name."</h5>
						</div>
						<div class='col-sm-12'>
							<p>
							".$detail."
							</p>
						</div>
					</div>

					<div class='col-sm-12 mb-3 ml-3'>
					<input type='text' name='id' value=".$id." style='display:none;'>       
                    <input type='submit' value='Get Now' class='btn btn-outline-success ml-5 mt-2' name='submit'>
					</div>
					</form>
				</div>";
}
}?>
			</div>	
			</div>
		</div>
	</div>
</div> 
<?php 
 require('footer.php')?>
</body>
</html>