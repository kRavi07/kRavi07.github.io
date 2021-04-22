 
<?php
session_start();
 if(empty($_SESSION['mail']))
 {
  echo "<script>
            if (confirm('Please Login first')) {
              window.location='index.php';
                         }  
                         else
                         { window.location='index.php'; }                 

        </script>";
 }
 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  
  <link rel="stylesheet" href="css/sidenav/style.css">

</head>
<body>
<?php require_once('nav.php'); ?>



<div class="container-fluid" style="padding-left: 0;">
  <div class="row " >
    <div class="col-4" style="z-index: 10;">
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4  pb-5">
          <h1><a href="index.html" class="logo"><?php echo $_SESSION['name']; ?></a></h1>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <a href="myorders.php"  class=""><i class="fa fa-shopping-bag"></i> My Subscription</a>
              
            </li>
            <li>
                <a href="profile.php"><i class="fa fa-user"></i> Personal Details</a>
            </li>
            <li>
              <a href="login_security.php" ><i class="fa fa-lock"></i> Login & Security</a>
              
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-power-off"></i> Log Out</a>
            </li>
          </ul>

          <div class="mb-5">
            <h3 class="h6">Subscribe for newsletter</h3>
            <form action="newsletter.php" method="POST">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Enter Email Address"> 
                
              </div>
              <button class="btn btn-success btn-sm" type="submit">Subscribe</button>
            </form>
          </div>

          <div class="footer">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart text-danger"></i>  <a href="index.php" class="text-daark" target="_blank">YourFram</a>
              </p>
          </div>

        </div>
      </nav>

        <!-- Page Content  -->
   
    </div>
    </div>
    
<div class="col-sm-8">
<!-- Default form subscription -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Security Details</p>


    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4  col-sm-12" placeholder="Name"value='<?php echo $_SESSION["name"]; ?>' >

    <!-- Email -->
    <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail" value='<?php echo $_SESSION["mail"]; ?>'>

    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="E-mail" value='<?php echo $_SESSION["mobile"]; ?>'>


    <input type="Password" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="************" > 

    <div class="row">
    <a href=""  class="col-md-4   " data-toggle="modal" data-target="#modalRegisterForm">Reset Password</a>
    <a href=""  class="col-md-4 " data-toggle="modal" data-target="#modalEmailChange">Change Email</a>


    <a href=""  class="col-md-4 " data-toggle="modal" data-target="#modalPhoneChange">Change Mobile No.</a>
    </div>
    <!-- Sign in button -->
    


</form>
<!-- Default form subscription -->
</div>

</div>
  </div>



<!--forget Password-->

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Reset Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" action="forgetPaswd.php">
      <div class="modal-body mx-3">
           <div class="md-form mb-5">
          <i class="fas fa-mobile prefix grey-text"></i>
          <input type="text" name="mob" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Mobile Number</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="email" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your email</label>
        </div>
       

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name='newPas' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Old password</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name='newPas' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">New password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange" type="submit"  value="submit"name="reset">Reset Password</button>
      </div>

    </form>
    </div>
  </div>
</div>

<!--/Forget password-->

<!-- Change Email-->

<div class="modal fade" id="modalEmailChange" tabindex="-1" role="dialog" aria-labelledby="myModalLabe1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Reset Email</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" action="forgetPaswd.php">
      <div class="modal-body mx-3">
           <div class="md-form mb-5">
          <i class="fas fa-mobile prefix grey-text"></i>
          <input type="text" name="mob" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Mobile Number</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="email" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your email</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="Nemail" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">New email</label>
        </div>
       

        

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name='newPas' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"> password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange" type="submit"  value="submit"name="reset">Reset Password</button>
      </div>

    </form>
    </div>
  </div>
</div>

<!--End of Change Email-->

<!--Change Mobile-->

<div class="modal fade" id="modalPhoneChange" tabindex="-1" role="dialog" aria-labelledby="myModalLabe1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Reset Mobile No.</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST" action="forgetPaswd.php">
      <div class="modal-body mx-3">
           <div class="md-form mb-5">
          <i class="fas fa-mobile prefix grey-text"></i>
          <input type="text" name="mob" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Mobile Number</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-mobile prefix grey-text"></i>
          <input type="text" name="Nmob" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">New Mobile No.</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" name="email" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Email</label>
        </div>
       

        

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name='newPas' class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass"> password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange" type="submit"  value="submit"name="reset">Reset </button>
      </div>

    </form>
    </div>
  </div>
</div>
<!--End Change Mobile-->


<?php require_once('foot.php')?>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="css/sidenva/js/jquery.min.js"></script>
    <script src="css/sidenav/js/popper.js"></script>
    <script src="css/sidenav/js/bootstrap.min.js"></script>
    <script src="css/sidenav/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>