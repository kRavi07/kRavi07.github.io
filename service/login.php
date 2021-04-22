<?php
session_start();
if(isset($_POST['forget_pas']))
{
 
}
 ?>

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


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link rel="stylesheet" href="validate-password/css/jquery.passwordRequirements.css">

  <link rel="stylesheet" type="text/css" href="css/login.css">

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>


<div class="container">
    <?php require('navbar.php')?>

  <div class="row my-5 py-5 ">
    <div class="col-md-12 text-center">
         
         <div class="col-sm-4 ml-auto"><span class="mr-3" ><b id="msg_span">Alredy User?Login Now</b></span><input type="checkbox" id="toggle-event" data-toggle="toggle" data-off="Login" data-on="Register" data-onstyle="success" data-offstyle="primary" >
         </div>
    </div>
    
      <div class="col-md-4  mt-5">
        <h2 class="col-md-12 text-muted text-center">
        
        </h2>
        <h3 class="col-md-12 text-muted text-center" id="register_head">Register Here</h3>
        

        <div class="list">
          <img src="image/worker-profile.svg" class="img-fluid">              
        </div>
      </div>
      <div class="col-md-8 mt-5 reg_form">
        
        
       <div class="col-md-12 text-muted form_signup" id="form_signup">
        <h3 class="col-md-8 text-center">Register</h3>
  <form action="user-validation.php" method="POST" >
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-person-check" style="font-size: 1.5rem;color:cornflowerblue"></i></span> </div>
          <input type="text" class="form-control" id="uname" placeholder="Name" name="name" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-phone" style="font-size: 1.5rem;color:cornflowerblue"></i></span> </div>
          <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile" name="mobile" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text" style="font-size: 1.5rem;color:cornflowerblue;"><i class="bi-envelope-open"></i></span> </div>
          <input type="mail" class="form-control" id="email" placeholder="Enter Email" name="mail" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-key" style="font-size:1.5rem;color:cornflowerblue;"></i></span> </div>
          <input type="password" class="form-control pr-password" id="password" placeholder="Enter password" name="pas" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-key" style="font-size:1.5rem;color:cornflowerblue;"></i></span> </div>
          <input type="password" class="form-control" id="confirm_password" placeholder="Enter password" name="pswd" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div id="message"></div>


        <div class="input-group mb-3 form-check">
          <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <input type="submit" class="btn btn-outline-success" name="signup" value="submit">
      </form>
       </div>













               <!--- Login--->
        <div class="col-md-12   form_login" id="form_login">
        <h3 class="col-md-8 text-muted text-center">Login</h3>
    <form action="user-login.php" method="POST" class="needs-validation" novalidate>
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-person-check" style="font-size: 1.5rem;color:cornflowerblue"></i></span> </div>
          <input type="text" class="form-control" id="uname" placeholder="Email" name="mail" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend"> <span class="input-group-text"><i class="bi-key" style="font-size: 1.5rem;color:cornflowerblue"></i></span> </div>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pas" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="input-group mb-3 form-check">
          <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <input type="submit" class="btn btn-primary" value="Login" name="submit">
      </form>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Forget Password ?
</button>
      </div>
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-italic" id="exampleModalScrollableTitle">Forget Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        <input type="text" name="f_email" placeholder="Enter OTP">
        <button type="submit" id="getOtp"  class="btn btn-success btn-sm">GET OTP</button>
        <input type="text" id="otp" name="pas_otp" placeholder="Enter otp">
        <input type="password" id="new_pass" name="new_pass" placeholder="Enter new password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="forget_pas" class="btn btn-primary">Submit</button>
      </div>
     </form> 
    </div>
  </div>
</div>
  </div>

</div>



<script>
// Disable form submissions if there are invalid fields
$(document).ready(function(){
  $("#form_login").css("display","none");
  $("#toggle-event").change(function(){
    if(this.checked){
    $("#form_signup").css("display","none");
    $("#form_login").css("display","block");
    $("#register_head").text("Login");
    $("#msg_span").text("New User ? Register Now")

    }

    else
    {
          $("#form_signup").css("display","block");
    $("#form_login").css("display","none");
    $("#register_head").text("Register");
    $("#msg_span").text("Alredy User ? Login")

    }
  });



});

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();







$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});

window.jQuery || document.write("<script src='_/js/lib/jquery-1.10.2.min.js'>\x3C/script>")</script>
<script src="validate-password/js/jquery.passwordRequirements.min.js"></script>
<script type="text/javascript">
  $(document).ready(function (){
    $(".pr-password").passwordRequirements();
});
$(".pr-password").passwordRequirements({

  numCharacters: 8,

  useLowercase:true,

  useUppercase:true,

  useNumbers:true,

  useSpecial:true

});
$(".pr-password").passwordRequirements({

  style:"light"

});
$(".pr-password").passwordRequirements({

  fadeTime: 500

});


</script>


</body>
</html>