<?php
session_start();
require_once('shop/db.php');






?>

<!DOCTYPE html>
<html>
<head>
	<title>Seasonal Plan</title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="nav.css">
  <link rel="stylesheet" type="text/css" href="customize.css">
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">

 
  <script src="exotic.js"></script>


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
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div class="top py-1 bg-dark text-light">
        <div class="container">
           <div class="row ">
            
             <marquee  >Welcome to YourFarm. We are currently working in Patna only.</marquee>

    

           </div>
       </div>
    </div>

<?php if(empty($_SESSION['mail']))
{
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Please  <a href='index.php' class='alert-link'>login</a> first.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}
  ?>

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


<!--Main Content-->

   <div class="container-fluid">
   	<div class="row custom_box">
   		<div class="col-md-12 box_title "> 		<h3 class="text-center">Customize Your Plan</h3> 
         <hr>
   		 </div>

   		
      
   		<div class="col-md-6">
   			 <h4 class="text-center">Choose Your Favourite Combo</h4>
        <div class="row" >
        	<ol id="selectable">
            
        	<div class="col-md-5 ui-widget-content    plan b1 btn" id="box" onmouseover="hover();" onmouseout="unhover();" onclick="deta(this);"  >  <img src="image/orange.png" class="img-fluid py-1 px-2" id="img_hov" >     
                 <h5 class="text-center "id="title">Seasonal Box 1</h5>

                 <input type="text" name="price" value="150" id="price_box" disabled="">                     
        	 </div>
        	<div class="col-md-5  ui-widget-content plan  text-center btn"  id="box1" onmouseover="hover1();" onmouseout="unhover1();" onclick="deta1();"  ><img src="image/veg1.png" class="img-fluid py-1 px-2" id="img_hov1"> 
                <h5 class="text-center title">Seasonal Box 2</h5>
                <input type="text" name="price" value="140" id="price_box1" disabled="">
                 
        	</div>
        	<div class="col-md-5 ui-widget-content plan text-center btn" id="box2" onmouseover="hover2();" onmouseout="unhover2();" onclick="deta2();"><img src="image/veg2.png" class="img-fluid py-1 px-2" id="img_hov2">
                  <h5 class="text-center title">Seasonal Box 3</h5>
                  <input type="text" name="price" value="130" id="price_box2" disabled="">               
        	 </div>
        	<div class="col-md-5  ui-widget-content plan text-center btn " id="box3" onmouseover="hover3();" onmouseout="unhover3();" onclick="deta3();"><img src="image/veg3clr.png" class="img-fluid py-1 px-2" id="img_hov3"> 
                  <h5 class="text-center title">Seasonal Box 4</h5>
                  <input type="text" name="price" value="260" id="price_box3" disabled="">
        	</div>
        </ol>
        </div>
        

   		</div>
   		<div class="col-md-6">
   			<h4 class="text-center">Select Your Subscription Plan</h4>
              <form action="finalCheckout.php" method="POST">
              	<div class="col-md-12 ">
              		<div class="row mt-5">
              	  	<h5 class="col selcet_box_title">Your Selected Box </h5> <input type="text" name="selcet_box" id="selcet_input_box" value="" class="col"  style="display: none;"> <h5 id="selcet_box" class=" text-center text-success mr-5 pr-5"></h5>
              	  </div>
                   
                   

                    <div class="row mt-3">
                      <h5 class="col price_title">Price</h5>
                      <h6 class="col price text-center ml-5 pl-4" id="price"></h6>
                      <input type="text" name="price" value="" id="id_input" style="display: none;">
                    </div>
                        
                    <div class="row mt-4">
                      <h5 class="col delivery_title">Delivery Charge</h5>
                      <h6 class="col delivery_charge text-success text-center ml-5 pl-5">FREE</h6>
                    </div>

                     <div class="row mt-4">
                      <h5 class="col Subscription_plan">Your Subscription Plan</h5>
                      <div class="subscription mr-5 pr-5">
                        <select name="subscription">
                          <option>Daily</option>
                          <option>Weekly</option>
                          <option>Monthly</option>

                        </select>
                      </div>
                    </div>
            
                      <div class="row mt-4">
                        <h5 class=" col quantity_title">Box Quantity</h5>
                        <div class="col text-center ml-5 pl-5"><input type="text" name="qty" value="1" class="col-md-5"> </div>

                      </div>
                           <div class="row">
                             <hr class="col text-success ">
                           </div>
                      <div class="row mt-4">
                        <div class="col"></div>
                        <button type="submit" name="buy" class="col btn btn-success btn-lg">Get Your Box</button>
                        <div class="col"></div>
                      </div>

              	</div>

              </form>
         

   		</div>
   		
   	</div>
   </div>

</div>


    </div>


  </div>
</div>


</div>

</div>
  

<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm"> More Question? Contact Us </a>
</div>










<!--FAQ section-->


<div class="container">
  <div class="row mt-5 accord">
    <h4 class="col-sm-12 text-center text-dark">FAQs</h4>
  </div>
       <div class="row">
    <div class="col">

      <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-4 col-sm-12 text-center">
        <button class="btn btn-success  btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         1. What I Will Get in Box ?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
        <li><strong>Seasonal Box 1</strong> 
          <span>  This box  contain Cucumber , Tomato ,Cabbage ,Cauliflower ,Raddish.    </span>
        </li>

        <li><strong>Seasonal Box 2</strong>
          <span>  This box  contain Cellery , Mushroom ,Capsicum ,Rutabags, pea.     </span>
        </li>

        <li><strong>Seasonal Box 3</strong>
          <span>  This box  contain Onion , Spinach ,Turnip ,Sweet Potato,Sprouts.     </span>
        </li>

        <li><strong>Seasonal Box 4</strong>
          <span>  This box  contain Potato , Brinjal ,cauliflower ,Raddish,Turnips.     </span>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-3 mt-3 text-center">
        <button class="btn btn btn-success btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         2. What is the quantity of  products?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
         <ul>
              <li><strong>Seasonal Box 1</strong> 
          <span>  This box contain 300g of each product.     </span>
        </li>

        <li><strong>Seasonal Box 2</strong>
          <span>   This box contain 500g of each product.    </span>
        </li>

        <li><strong>Seasonal Box 3</strong>
          <span>   This box contain 700g of each product.    </span>
        </li>

        <li><strong>Seasonal Box 1</strong>
          <span>   This box contain 1000g of each product.     </span>
        </li>

            </ul>
       
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-2 mt-2 text-center ">
        <button class="btn  btn-success btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        3.  Will I be locked into a contract?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <h6>No, you can cancel your plan at any time. Just make sure you do so before your weekly cutoff to stop your next order. It’s that simple.</h6>
      </div>
    </div>
  </div>

    <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-2 mt-2 text-center ">
        <button class="btn  btn-success btn-lg collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        4.  Can I skip a week of delivery ? 
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <h6>     Definitely. Just make sure you do it before your delivery cutoff time to stop your next order.</h6>
      </div>
    </div>
    </div>
</div>
</div>
</div>
</div> 
  
  

<!--FAQ section End-->











<script type="text/javascript">





  var imgHov=document.getElementById("img_hov");
  var imgHov1=document.getElementById("img_hov1");
  var imgHov2=document.getElementById("img_hov2");
  var imgHov3=document.getElementById("img_hov3");

  function hover() {
                         
     imgHov.setAttribute('src', 'image/orangeclr.png');

}


function unhover() {
  imgHov.setAttribute('src', 'image/orange.png');
}
//************


  function hover1() {
                         
     imgHov1.setAttribute('src', 'image/veg1clr.png');

}


function unhover1() {
  imgHov1.setAttribute('src', 'image/veg1.png');
}

//******
function hover2() {
                         
     imgHov2.setAttribute('src', 'image/veg2clr.png');

}


function unhover2() {
  imgHov2.setAttribute('src', 'image/veg2.png');
}


  function hover3() {
                         
     imgHov3.setAttribute('src', 'image/veg3.png');

}


function unhover3() {
  imgHov3.setAttribute('src', 'image/veg3clr.png');
}


function oc1()
{
   
   document.getElementById("selcet_box").innerHTML= document.getElementByClass("title").value;

}

$( function() {
    $( "#selectable" ).selectable( { 
     selected:function() {}
     
     
    } );
  } );

$( "#selectable" ).on( "selectableselected", function( event, ui ) {
   $(ui.selected).css("color", "green");
   var x=$(ui.selected).text(); 
   
   $("#selcet_box").html(x);
    $("#selcet_input_box").val(x);
 
   

} );




 
</script>



</body>
</html>




