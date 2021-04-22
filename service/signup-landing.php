<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

<style type="text/css">
	body
	{
		margin: :0;
		padding: 0;

	}
	.box a{
		text-decoration:none;
		

		font-size: 2rem;
		
	}
	.box_left
	{
		border-right: 5px dashed cornflowerblue;
	}
</style>
</head>
<body>
<?php require('navbar.php')?>

<div class="container">
	<div class="row  mt-5 box">
		<div class="col-sm-12 text-center mt-5">
			<h4 class="text-success"><i>Welcome to SocialDude</i></h4>
		</div>
		<div class="col-sm-6  mt-5 box_left">
			<div class="col-sm-6 mx-auto">
			<img src="image/workers.svg" class="img-fluid">
			</div>
			<div class="col-sm-12 text-center mt-5">
			<a class="btn btn-outline-primary text-center " href="login-worker.php">I'm Worker</a>
			</div>
		</div>
		<div class="col-sm-6 mt-5">
			<div class="col-sm-6 mx-auto">
				<img src="image/user.svg" class="img-fluid">
			</div>
	
			<div class="col-sm-12 text-center mt-5">
			<a class="btn btn-outline-success text-center" href="login.php">I'm Customer</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>