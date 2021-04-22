<?php
session_start();
  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>YourFarm - Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Arable a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/component.css" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/single.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">



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

<link rel="stylesheet" type="text/css" href="../header.css">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../nav.css">
    <style type="text/css">
    	.main_content
    	{
    		font-family:'Nunito' ,sans-serif; 
    		font-size:1.2em;
    	}
         .blog_date
    	{
    		font-family:'Nunito' ,sans-serif; 
    		font-size:1.1em;
    	}
    	.blog_title
    	{
    				font-family:'Nunito' ,sans-serif; 
    		font-size:1.5em;
    	}
    	.blog_brief

    	{
    			font-family:'Nunito' ,sans-serif; 
    		font-size:1.2em;
    	}
    	 .nav-item ,  .navbar-brand
    	{
    			font-family:'Nunito' ,sans-serif; 
    		font-size:1.2em;

    	}
    	.btn
    	{
    		font-family:'Nunito' ,sans-serif; 
    		
    	}
    </style>
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
 <img src="..\image\logo.png" class="d-inline-block align-bottom" height="40" >
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



<!---header End-->







    <div class="inner-page">
    </div>
    <!-- /breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog</li>
    </ol>
    <!-- //breadcrumb -->
     <section class="banner-bottom-w3layouts py-lg-2 py-md-5 py-2">
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
                <h4 class="sub-tittle text-uppercase text-center">Recent Talks</h4>
                <h3 class="tittle text-center mb-md-5 mb-4"> Blog Posts</h3>
                <div class="row">
                    <!--left-->
                    <div class="col-lg-8 left-blog-info text-left">
                        <div class="blog-sec">
                             
                        <?php
                         $stmnt ="SELECT * FROM `blog` ";
                            $result=$db->query($stmnt);
                             if($db->error)
                             {
                                   echo $db->error;
    
                               }
 

                              while ($array=$result->fetch_array()) {
                            

                           echo "

                            <div class='about-in blog-grid-info text-left mt-5'>
                                <div class='card img'>
                                    <div class='card-body img'>
                                        <img src='" .$array['image']. "'alt='' class='img-fluid'>
                                        <div class='blog-des blogger '>
                                            <span class='entry-date blog_date'> " .$array['blog_date']. " </span>
                                            <h5 class='card-title text-uppercase mt-2 blog_title' > " .$array['title']. " </h5>
                                            
                                            <div class='log-in mt-md-3 mt-2'>
                   <a class='' data-toggle='collapse' href='#".$array['blog_id']."' aria-expanded='false' aria-controls='collapseExample'>
                                       Read More
                                                 </a>
                  
                                            </div>
                                            <div class='collapse' id=".$array['blog_id'].">
  <div class='mt-3 main_content' >
    ".$array['main_content']."
  </div>
</div>
                                        </div>

                                    </div>
                                </div>
                            </div>";}
                            ?>
                             
                        </div>
                    </div>

                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 right-blog-con text-right">
                        <div class="right-blog-info text-left">
                            <div class="tech-btm">
                                <img src="images/g4.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div class="tech-btm">
                                <h4>Sign up to our newsletter</h4>
                                <p>Get your daily knowledge pack in your inbox </p>
                                <form action="blog_newsletter.php" method="post">
                                    <input class="form-control" type="email" name="sub_email" placeholder="Email" required="">
                                    <input class="form-control" type="submit" name="submit" value="Subscribe">
                                </form>

                            </div>
                            <div class="tech-btm">
                                <h4>Top stories of the week</h4>
                                <?php
                          $stmnt ="SELECT * FROM `blog` LIMIT 2 ";
                            $result=$db->query($stmnt);
                             if($db->error)
                             {
                                   echo $db->error;
    
                               }
 

                              while ($array=$result->fetch_array()) {
                            
                            echo"
                           

                                <div class='blog-grids row mb-3'>

                                    <div class='col-md-5 blog-grid-left'>
                                        <a href='#".$array['blog_id']."'>
										<img src='".$array['image']."' class='img-fluid rounded'>
									</a>
                                    </div>
                                    <div class='col-md-7 blog-grid-right'>

                                        <h5 class='blog_title'>
                                            ".$array['title']."
                                        </h5>
                                        <div class='sub-meta '>
                                            <span class='blog_date'>
											<i class='far fa-clock'></i> ".$array['blog_date']."</span>
                                        </div>
                                    </div>

                                </div>";}
                                

                                    ?>


                            </div>
                            <div class="single-gd my-5 tech-btm">
                                <h4>Our Progress</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="single-gd tech-btm">
                                <h4>Recent Post</h4>
                                <div class="blog-grids">
                                    <div class="blog-grid-left">
                                        <a href="single.html">
										<img src="images/g2.jpg" class="img-fluid rounded" alt="">
									</a>
                                    </div>
                                    <div class="blog-grid-right">

                                        <h5>
                                            <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                        </h5>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                    <!--//right-->
                </div>

            </div>
        </div>
    </section>
    <!--/single-->
    <!--//Register-->

    <!--//model-form-->
    <?php require_once('../foot.php')?>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- password-script -->
    
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>