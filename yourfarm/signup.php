<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="global.css">

<link rel="stylesheet" type="text/css" href="nav.css">


    <title>Sign Up</title>
  </head>
  <body>
  

   <div class="top py-1">
        <div class="container">
           <div class="row">
             <div class="col-md-4"><i class="fa fa-phone"></i><span>&nbsp+91847895r</span></div>
             <div class="col-md-4"><i class="fa fa-envelope"></i><span>&nbspyourfarm@support</span></div>
              <div class="col-md-4" align="text-right"><i class="fa fa-heart text-danger"></i><span>&nbspWhole day service</span></div>
           </div>
       </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h3><img src="image\logo.png" height="45px"> YourFarm</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           <a href="http:index.php"  class="nav-link"><i class="fa fa-home"></i>&nbspHome</a>
           
           <a href="shop/all_cat.php" class="nav-link"><i class="fas fa-store"></i>&nbspShop</a> 
          <a href="gallary.php" class="nav-link"><i class="fa fa-images"></i>&nbspGallary</a>
           <a href="#footer" class="nav-link"><i class="fa fa-comments"></i>&nbspContact</a>
            <a href="add_cart.php" class="nav-link"><span class="icon-shopping_cart"><i class="fa fa-shopping-cart"></i>&nbsp[0]</a>
              <a href="profile.php" class="nav-link btn-rounded btn-dark">My Account</a>

          </ul>
        </div>
      </div>
    </nav>








    <section class="container-fluid">
      <section class="row justify-content-center pl-5">
        <section class="col-12 col-sm-6 col-md-3 pt-5">
 <div class="col text-center"><h4><strong>Register</strong></h4></div>
            <form action="signupValidat.php" method="POST">
            <div class="modal-body">
               <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="name">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Name</label>
              </div>
                         
             <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="pas">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>


              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile">
                <label data-error="wrong" data-success="right" for="modalLRInput15">Your Mobile No.</label>
              </div>

           

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="email" id="modalLRInput14" class="form-control form-control-sm validate" name="mail">
                <label data-error="wrong" data-success="right" for="modalLRInput14">Enter Mail</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" name="submit">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            </form>
        </section>
      </section>
    </section>



<?php require_once('footer.php')?>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.10.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyD6s4f8MRgQ2Va7b5oTcanC-CAxuHXUseY",
    authDomain: "yourfarm-a1d94.firebaseapp.com",
    databaseURL: "https://yourfarm-a1d94.firebaseio.com",
    projectId: "yourfarm-a1d94",
    storageBucket: "yourfarm-a1d94.appspot.com",
    messagingSenderId: "807759245952",
    appId: "1:807759245952:web:cb004fa89d05d1fb4f6c65",
    measurementId: "G-0PM2584PJY"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
   
  </body>


</html>
