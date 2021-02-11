<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
<style type="text/css">
     .q_icon{
     	    color:cornflowerblue;
     }
	.q_icon:hover
	{
	   color:#4CAF50;
	   cursor: pointer;
	}


	@media only screen and (min-width:576px) and (max-width:990px) 
	{
      .quality
      {
      	flex: 0 0 50%;
      	max-width: 50%;
      }
	}
	
	@media only screen and (min-width:990px)
	{
		.quality
		{
				flex: 0 0 25%;
      	max-width: 25%;
		}
	}
</style>
</head>
<body>

<div class="container">
	<div class="row mt-5">
	
			
			<div class=" col-lg-3 quality ">
				<div class="col-12  text-center">
					<i class="bi-patch-check q_icon" id="icn" style="font-size: 3rem; "></i>
				</div>
				<div class="col-12">
					<h5 class="text-center">Superior Services</h5>
				</div>
				<div class="col-12">
					<p class="ml-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor 
					</p>
				</div>
			</div>
			<div class=" col-lg-3 quality ">
				<div class="col-12  text-center">
					<i class="bi-person-check q_icon"id="icn"  style="font-size: 3rem; "></i>
				</div>
				<div class="col-12">
					<h5 class="text-center">Expert Serviceman</h5>
				</div>
				<div class="col-12">
					<p class="ml-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor 
					</p>
				</div>
			</div>

			<div class=" col-lg-3 quality ">
				<div class="col-12 q_icon text-center">
					<i class="bi-headset q_icon"id="icn"  style="font-size: 3rem; "></i>
				</div>
				<div class="col-12">
					<h5 class="text-center">24*7 Customer Support</h5>
				</div>
				<div class="col-12">
					<p class="ml-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor 
					</p>
				</div>
			</div>
			<div class=" col-lg-3 quality ">
				<div class="col-12 q_icon text-center">
					<i class="bi-clock q_icon" id="icn" style="font-size: 3rem; "></i>
				</div>
				<div class="col-12">
					<h5 class="text-center">On Time Service</h5>
				</div>
				<div class="col-12">
					<p class="ml-3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor 
					</p>
				</div>
			</div>
		
	</div>
</div>

</body>

<script type="text/javascript">
	gsap.to(q_icon, {
    duration: 5,
    rotation: "180deg",
    
});
</script>
</html>