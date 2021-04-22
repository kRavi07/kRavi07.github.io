<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg bg-cornflowerblue  navbar-light bg-light">
  <a class="navbar-brand ml-5" href="#">
    <img src="image/logo.jpg" class="img-fluid" height="150rem" width="150rem;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 ml-auto mt-lg-0">
      <li class="nav-item active pl-5">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pl-5">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item pl-5">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item pl-5">
        <a class="nav-link" href="service-provider.php">Service Provider</a>
      </li>
      
        <?php if(empty($_SESSION['user_mail']))
    {
    echo " <li class='nav-item pl-5'>

    <a href='signup-landing.php' class='nav-link btn btn-outline-primary  rounded-pill px-md-3' > LogIn/Register</a>
    </li>
    ";
    }
    else
    {
       echo "<li class='nav-item pl-5'>
       <a href='profile.php' class='nav-link btn btn-outline-success  rounded-pill '> <i class='fa fa-user'></i> My Account</a>
         </li>";
        echo" 
        <li class='nav-item pl-5'>
           <a href='logout.php' class='nav-link btn btn-danger text-light  rounded-pill px-2'> <i class='fa fa-user'></i> Log Out</a>
        </li>
               ";
    }?>
      


    
    </ul>
    
  </div>
</nav>


</body>
</html>