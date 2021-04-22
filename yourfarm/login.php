<?php
   
   session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="login2.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
    <title>User Login</title>
  </head>
  <body>
    <?php require_once('nav.php')  ?>


  	<div class="container">
      <div class="row justify-content-center txt">
        <div class=" col-md-6  animated slideInUp delay-.3s mt-2 boxs">
          
          <h2 class="text-center"> <img src="image/login.png" class="img-fluid"> &nbsp Login &nbsp</h2>

  <form class="form-container" method="POST" action="validat.php">
    <div class="col-md-8 inputBox">
      
    <input type="text" name="mail" required="">
    <label>E-mail</label>

    </div>
    <div class="col-md-8 inputBox">
      
      <input type="password" required="" name="pas">
      <label>Password </label>

    </div>

    <div class="col-md-6">
       <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
    <label class="custom-control-label text-light mb-1" for="customCheck">Remember me</label>
  </div>
    <input type="submit" name="submit" class="btn btn-primary col-md-7" value="submit"><br>
  </div>
    <div class="col-md-12 ">
    <a href="#" class="text-warning" onclick="openNav()">Forget password?</a></br>
    </div>
    

  
    </form>
    <div class="col-md-6 justify-content-center text-light  ml-3">New User ?<a href="signup.php" class="text-warning">Create Your  Account</a> </div>
        </div>

      

  <div class="container"> 
   
<div id="myNav" class="row overlay">

  <div class="col-sm-4">  <h3 class="text-center text-primary">YourFarm<h3> </div>
  <div class="col-sm-4 justify-content-center">
    <h3 class=" text-danger">Reset Password</h3>
    <form method="POST" action="forgetPaswd.php">
      <label for="mob" class="text-success">Mobile</label><br>
      <input type="text" name="mob" placeholder="Enter Mobile Number" class="col-md-8" required><br>
      <label for="email" class="text-success">E-mail</label><br>
      <input type="text" name="email" placeholder="Enter Email" class="col-md-8" required><br>
      <label class="text-success"> New Password </label><br>
           <input type='text' name='newPas' class="col-md-8" required><br>
           <label class="text-success">Confirm New Password </label><br>
           <input type='text' name='CnewPas' class="col-md-8" required><br>
      <input type="submit" name="reset" value="Reset Password" class="btn-lg btn-danger my-4"><br>
       
    </form>
  
  </div>
    <a href="javascript:void(0)" class="closebtn text-warning" onclick="closeNav()">&times; Close</a>
</div>
</div>


      </div>
    </div>

<?php require_once('footer.php')?>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
  </body>
</html>



 