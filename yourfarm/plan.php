<?php
session_start();
if(empty($_SESSION['mail']))
{
	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Please  <a href='index.php' class='alert-link'>login</a> first.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>YourFarm-Box Subscription Plan </title> 
<link href="plan.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pricing Tables Design ,Flat Pricing Tables Design ,Popup Pricing Tables Design,Clean Pricing Tables Design "./>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->


    <!-- Bootstrap CSS -->
   

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
   <style type="text/css">
   	.panel
{
	padding: 1.2em;
	box-shadow: 5px 5px 10px #000;
	background: #CFCCCC;
	margin: 2em;
}
.panel span,strong
{
font-size: 1.2em;
}
   </style>
</head>
<body bgcolor="black">

    <nav class="navbar navbar-expand-lg blue-grey dark">
  <a class="navbar-brand text-light" href="#" >
 <img src="image\logo.png" class="d-inline-block align-bottom" height="40" >
  <span >YourFarm</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active ">
        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="plan.html">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Blog</a>
      </li>
      

         
    </ul>

    <?php if(empty($_SESSION['mail']))
    {
    echo "<a href='' class='btn btn-default btn-rounded' data-toggle='modal' data-target='#modalLRForm'> LogIn/Register</a>";
    }
    else
    {
       echo "<a href='' class='btn peach-gradient btn-rounded' > <i class='fa fa-user'></i> My Account</a>
         
           <a href='logout.php' class='btn btn-default btn-rounded' >Log Out</a>
        
               ";
    }?>
  </div>
</nav>

  <!--Modal: Login / Register Form-->
<div class="modal fade " id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-green darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item " >
            <a class="nav-link text-dark" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
           
            <!--Body-->
             <div class="col text-center"><h4><strong>Login</strong></h4></div>
             <form action="planLogvalidat.php" method="POST">
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate"  name="mail">
                <label data-error="wrong" data-success="right" for="modalLRInput10" >Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="pas">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info" type="submit" name="submit" value="submit">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
           

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
              <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="col text-center"><h4><strong>Register</strong></h4></div>
            <form action="signupValidat.php" method="POST">
            <div class="modal-body">
               <div class="md-form form-sm mb-5">
                <i class="fas fa-user prefix"></i>
                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="name">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
              </div>
                         
             <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="pas">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>


              <div class="md-form form-sm mb-5">
                <i class="fas fa-mobile prefix"></i>
                <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile">
                <label data-error="wrong" data-success="right" for="modalLRInput15">Your Mobile No.</label>
              </div>

           

              <div class="md-form form-sm mb-4">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput14" class="form-control form-control-sm validate" name="mail">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Enter Mail</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" value="submit" name="signup">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div><!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
 


<!--start-pricing-tablel-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 

<?php 	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Please must read   <a href='faq.html' class='alert-link btn btn-success'>FAQs</a> first.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>"; ?>

 <div class="pricing-plans">
					 <div class="wrap">
					 	<div class="price-head">
					 		<h1>Choose Your Organic Box</h1>
					 	</div>

						<div class="pricing-grids">
						<div class="pricing-grid1">
							<div class="price-value">
									<h2><a href="#"> SEASONAL</a></h2>
									<h5><span>$ 19.99</span><lable></lable></h5>
									<div class="sale-box">
							<span class="on_sale title_shop">NEW</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">Fresh & 100% Organic </a></li>
								<li><a href="#">Get  Fully Organic Exotic Vegetables in Box </a></li>
								<li class="whyt"><a href="#"> Different Combination of Vegetable Available </a></li>
								<li><a href="#">At Very Cheap Price  </a></li>
								<li class="whyt"><a href="#">No Plastic Packaging</a></li>
								<li ><a href="#">Fast Delivery</a></li>
							</ul>
							<div class="cart1 ">
								<a class="popup-with-zoom-anim " href="exotic_plan.php">Purchase</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid2">
							<div class="price-value two">
								<h3><a href="#">EXOTIC</a></h3>
								<h5><span>$ 29.99</span><lable> / month</lable></h5>
								<div class="sale-box two">
							<span class="on_sale title_shop">HOT</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#"> Fresh & 100% Organic </a></li>
								<li><a href="#"> Variety Of  Vegetables of high Nutrition </a></li>
								<li class="whyt"><a href="#">Cheaper than Market</a></li>
								<li><a href="#"> No use of Pesticides </a></li>
								<li class="whyt"><a href="#">No Plastic Packaging</a></li>
								<li><a href="#">Express Delivery</a></li>
							</ul>
							<div class="cart2 mt-5">
								<a class="popup-with-zoom-anim" href="#" class="">Purchase</a>
							</div>
							</div>
						</div>
						<div class="pricing-grid3">
							<div class="price-value three">
								<h4><a href="#">PREMIUM</a></h4>
								<h5><span>$ 49.99</span><lable> / month</lable></h5>
								<div class="sale-box three">
							<span class="on_sale title_shop">NEW</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#"> Fresh and 100% Organic </a></li>
								<li><a href="#">  Hand Picked & Fully Natural  </a></li>
								<li class="whyt"><a href="#"> Wide Variety of Vegetable Combo  </a></li>
								<li><a href="#"> No use of Pesticides </a></li>
								<li class="whyt"><a href="#">No Plastic Packaging</a></li>
								<li><a href="#"> Standard Delivery</a></li>
							</ul>
							<div class="cart3 mt-5">
								<a class="popup-with-zoom-anim" href="#" class="pt-2">Purchase</a>
							</div>
							</div>
						</div>
							<div class="clear"> </div>









							

		<div class="container">
			<div class="row mt-5 justify-content-center">
			<div class="col-md-5">   <a href="faq.html" class="btn btn-rounded btn-outline-info fade-in">Check Detail And FAQs About Box's & Subscription</a>   </div>
			</div>
		</div>					
								 
</body>
</html>		