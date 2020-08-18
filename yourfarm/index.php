<?php 

session_start();
 ?>




<html lang="en">
  <head>
    <!-- Required meta tags -->
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
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>

<link rel="stylesheet" type="text/css" href="header.css">

<!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="nav.css">

<link rel="stylesheet" type="text/css" href="testing.css">
<script type="text/javascript" src="index.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css">

    <title>YourFarm</title>
  </head>
  <body>



   <div class="top py-1 bg-dark text-light">
        <div class="container">
           <div class="row ">
            
             <marquee  >Welcome to YourFarm. We are currently working in Patna only.</marquee>

    

           </div>
       </div>
    </div>


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
        <a class="nav-link text-light" href="blog/blog.php">Blog</a>
      </li>
      

         
    </ul>

    <?php if(empty($_SESSION['mail']))
    {
    echo "<a href='' class='btn btn-default btn-rounded' data-toggle='modal' data-target='#modalLRForm'> LogIn/Register</a>";
    }
    else
    {
       echo "<a href='profile.php' class='btn peach-gradient btn-rounded' > <i class='fa fa-user'></i> My Account</a>
         
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
             <form action="validat.php" method="POST">
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
                <button class="btn btn-info" type="submit" name="submit" value="submit">Log in <i class="fa fa-sign-in ml-1"></i></button>
              </div>
           

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                
                  <a href="" class="btn btn-warning btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Forget Password ?</a>                     
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
                <button class="btn btn-deep-orange" type="submit" value="submit" name="signup">Sign up <i class="fa fa-sign-in ml-1"></i></button>
              </div>

            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div><!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
 

<!-- Login pop -->
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

<!--/forget Pass-->




<!--carousel-->
<?php require_once('slider.php') ?>
  <hr>
   <h1 class=" text-center">Why YourFarm ?</h1>
   <hr>

<section class="icon  pl-5 mt-3">
      <div class="container">
        <div class="row ">
          <div class="col-md-3 text-center d-flex align-self-stretch ">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
               
              </div>
              <div class="media-body">
                <img src="image\delivery.png" width="80px">
                <h3 class="heading">Express Delivery </h3>
                <span>Delivery Within 12 hrs</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <img src="image\veg.png" width="80px">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <img src="image\premi.png" width="80px">
                <h3 class="heading">Superior Quality</h3>
                <span>Fresh and Organic</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4 ml-5">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <img src="image\customer.png" width="80px">
                <h3 class="heading">Support</h3>
                <span>24*7 Customer Support</span>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
     <hr>
 <div class="text-center">
   <a href="plan.html" class="btn btn-outline-success">Get Your Box Now !</a>
 </div>

<section class="service">
  <div class="container">
   <div class="row">
     <div class=" service_box text-center">
       <img src="image\1355.png" class="img-fluid">
   
     </div>
     <div class="col-sm-12 text-center">
       <button class="btn btn-outline-cyan" data-toggle="modal" data-target="#modalSubscriptionForm">Book Your FARM Now</button>
       
     </div>
     
   </div>
  </div>
</section>







<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Contact Us</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="land_subs.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form3" class="form-control validate" name="name">
          <label data-error="wrong" data-success="right" for="form3">Your name</label>
        </div>

         <div class="md-form mb-5">
          <i class="fas fa-mobile prefix grey-text"></i>
          <input type="text" id="form6" class="form-control validate" name="mob">
          <label data-error="wrong" data-success="right" for="form6">Mobile Number </label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" class="form-control validate" name="mail">
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
          
        </div>

        <div class="md-form mb-1">
          <i class="fas fa-tag prefix grey-text"></i>
          <textarea id="form4" class="form-control validate" name="qry"></textarea>
          <label data-error="wrong" data-success="right" for="form4">Your Query </label>
          <p class="text-center"><small>Visit Our office for more deatils</small></p>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-outline-success" type="submit" name="submit">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>

    </div>
    </form>
  </div>
</div>






<!--<img src="image\1354.jpg" class="img-fluid">-->


    

<section class="service  " id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 ">
      <h2 class="title text-center mb-2">What We Produce  ?</h2>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Get fresh organic vegetables delivered within time 
        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/lettuce.png" alt="news image"  class="img-fluid" style="height:10em;">
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Leafy Vegatables
              </h3>
              <h6 class="mt-2"> <i class="fa fa-check text-danger"> </i> Rich Source Of Iron,Calcium,Potassium & Magnesium</h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"> </i>Provides important Vitmins including C ,K & Vitamin E.</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/brocoli.png" alt="news image" class="img-fluid" style="height:10em";>
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Cruciferous Vegetables
              </h3>
              <h6 class="mt-2"> <i class="fa fa-check text-danger"></i>Low Calorie Folate contains Vitamins E & K </h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"></i>Fibre Containing - Good for Weight loss </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/zucchini.jpg" alt="news image" class="img-fluid" style="height:10em"; >
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Marrow Vegetables
              </h3>
             <h6 class="mt-2"> <i class="fa fa-check text-danger"></i>A Folate rich in Vitamin A , C & B6 Provide 28Cal./100g energy  </h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"></i> Contains Proteins ,Sodium,Calcium - Good for bones  </h6>           
               </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/sweet_potato.png" alt="news image" class="img-fluid" style="height:  10em;">
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Root Vegetables
              </h3>
             <h6 class="mt-2"> <i class="fa fa-check text-danger"></i>Rich in fibre and several Anti-Oxidants like Beta-Carotne  </h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"></i> Provides Vitamin A , C & Maganese Good for Vision  </h6>               </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/celery.jpg" alt="news image" class="img-fluid" style="height:  10em;">
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Edible Stem
              </h3>
                  <h6 class="mt-2"> <i class="fa fa-check text-danger"></i>Good Source Of Vitamin K and Vitamin B9</h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"></i> Contains Magnesium and Fibre - Control Blood Pressure  </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="image/shallots.jpg" alt="news image" class="img-fluid" style="height: 10em;">
            <div class="ser-text-wthree mt-3">
              <h3 class="text-success">
                Allium
              </h3>
                        <h6 class="mt-2"> <i class="fa fa-check text-danger"></i>Provide ample amount of Vitamin C and B6 </h6>
              <h6 class="mt-2"><i class="fa fa-check text-danger"></i> Contains Magnesium ,Folate & Anti-Oxidants - Reduce Risk Of Cancer  </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<div class="container-fluid">
  <div class="row mid-row1">
    <div class="col-md-6">
      <p align="justify dets_"><h3>1. Organic Food Is Better for Our Health</h3><br>
There have been multiple studies done to determine if organic food is healthier for you and the answer is YES. In addition to you not consuming any of those harmful and toxic substances like (pesticides, synthetic hormones, artificial colors, and preservatives, etc.). </p>
  </div>
   
    <div class="col-md-6">
      <img src="image\bb2.jpg" width="400px" align="right" class="img-fluid">
    </div>

    
  </div>
  <hr>
   <div class="row mid-row2">
    <div class="col-md-6">
      <img src="image\bb3.jpg" width="400px"  class="img-fluid">
    </div>
    <div class="col-md-6">
      <p align="justify dets_"><h3>2. Organic Food Is Better for Farmers & Farmworkers</h3><br> One of the things that really need to be mentioned that when the farmers get to their home after a days work in the conventional fields, they would take off all their clothes and shower before they would touch their children, because they didn't want to expose them to the chemicals they were exposed to day after day.. </p>
    </div>
   
    
</div>
<hr>

 <div class="row mid-row">

    <div class="col-md-6">
  <p align="justify dets_"><h3>3. Organic Food is Better for The Soil</h3><br>
The health of our soil is tremendously important and something that many of us don't really think about. For starters, conventional farming strips the soil of nutrients, which inevitably leads that soil to become desolate and no longer farmable.I just want to mention is that organic soil also retains more water, which means that we have to use less water to grow it and it causes less runoff which means fewer chemicals in our water supply.</p>
  </div>

  <div class="col-md-6">
    <img src="image\bb5.jpg" width="400px" align="right" class="img-fluid">
  </div>

  </div>

</div>






  <section class="mango py-lg-4 py-md-4 py-sm-3 py-3 mt-4 ">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7">
          <img src="image/vegetarian.png" alt="news image" class="img-fluid ">
        </div>
        <div class="col-md-5">
         <h2>What Does “Organic” Mean?</h2>
         <p>That's a really good question! I think a lot of people just assume that organic = higher prices. While that is sometimes the case, there are so many immense benefits of eating organic food.</p>
         <p>
Organic refers to the way in which agriculture products (produce, meat, dairy, etc.) are grown and processed. Companies that produce, process and sell organic products must adhere to very strict guidelines. Unlike the words “natural” or “non-toxic” or “healthy”, the word “organic” is regulated by the USDA. That means any time that a product says “organic” on the label it follows these strict standards.
</p>
<p>What you'll never find in organic products:
Toxic and synthetic pesticides or fertilizers
GMO ingredients
Antibiotics or synthetic growth hormones
Artificial flavors, colors, or preservatives
Sewage sludge or irradiation</p>
          </div>
        </div>
      
    </div>
  </section>






<?php require_once('foot.php')?>




       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
