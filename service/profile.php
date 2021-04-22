<?php 

session_start();

$user_id=$_SESSION['user_id'];
$user_mail=$_SESSION['user_mail'];
  
 
  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
 $sql="SELECT * FROM `user` WHERE `Email`='{$user_mail}' AND `Id`='{$user_id}' ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}

$array=$result->fetch_array();

$result->free();



$user_name=$array['Name'];

$user_mobile= $array['Mobile'];



  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
  
 $sql="SELECT so.order_id,so.txn_amount,wo.Name,wo.service FROM `service_order` AS so INNER JOIN `worker` AS wo ON so.worker_id=wo.id 
  WHERE so.user_id=$user_id
";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 
  if($result->num_rows===0)
{
/*
echo "     <div class='alert alert-danger'>
  <strong>Sorry!</strong> You don't have any order history. 
</div>     ";*/
}

else{	
			
  while ($array=$result->fetch_array()) 
{
  $order_id = $array['order_id'];
  $worker=$array['Name'];
  $service=$array['service'];
  $amount=$array['txn_amount'];
  }
}


//EDit profile
if(isset($_POST['userEditProfile']))
{   
  $userfirstName=$_POST['userfirstName'];
  $userlastName=$_POST['userlastName'];
  $userMail=$_POST['userMail'];
  $userMobile=$_POST['userMobile'];
  $userAddress=$_POST['userAddress'];
  $userState=$_POST['userState'];
  $userCountry=$_POST['userCountry'];
  $userPin=$_POST['userPin'];

  
$sql="SELECT * FROM `user` WHERE `Id`='{$user_id}'  ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
  
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}
else
{  
    
    $sql= "UPDATE `user` SET `Email`='".$userMail."', `Mobile`='".$userMobile."' WHERE `Id`='".$user_id."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
        echo"<script>
            alert('Profile Updated');
        </script>";

      }

 }
}

//Reset Password 





 if(isset($_POST['userResetPassword']))
 {  
  
 $oldPass=md5($_POST['userOldPas']);
 $newPass=md5($_POST['userNewPas']); 
$sql="SELECT * FROM `user` WHERE `Id`='{$user_id}'";
$result=$db->query($sql);
 if($db->error)
{
    echo $db->error;
    
}
  
  
if($result->num_rows===0)
{
  echo"<script>alert('Account Does not Exist')</script>";
}
else
{


$array=$result->fetch_array();
$result->free();


if($oldPass!=$array['Password'])
{
  echo "<script>alert('Please enter correct old password')</script>";
  
}
else if($newPass==$array['Password'])
{
  echo "<script>alert('New Password cannot be same as old')</script>";

}
 
else {
    
   $sql= "UPDATE `user` SET `Password`='".$newPass."' WHERE `Id`='".$user_id."' ";

         $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
        echo"<script>
            alert('Password Changed Successfull');
        </script>";

      }

 }
}
}     

?>



<html>
<head>
	<title></title>
</head>
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
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link rel="stylesheet" type="text/css" href="user_profile.css">
<body>
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="image/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="menu-collapsed">ServiceDude</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sign Out</a>
            </li>
            <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
            <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#top">Profile</a>
                    <a class="dropdown-item" href="#top">Order</a>
                    <a class="dropdown-item" href="#top">Edit</a>
                    <a class="dropdown-item" href="#top">Etc ...</a>
                </div>
            </li><!-- Smaller devices menu END -->
        </ul>
    </div>
</nav><!-- NavBar END -->
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" id=myProfile>
                    <span class="menu-collapsed">My Profile</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white"id="orders">
                    <span class="menu-collapsed">Orders</span>
                </a>
               
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white" id="profileEditBtn">
                    <span class="menu-collapsed" >Edit Profile</span>
                </a>

                 <a href="#" class="list-group-item list-group-item-action bg-dark text-white" id="resetPasswordBtn">
                    <span class="menu-collapsed" >Reset Password</span>
                </a>

                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Addresses</span>
                </a>
            </div>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Tasks</span>
                </div>
            </a>
           
            <!-- /END Separator -->
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    <!-- MAIN -->
    <div class="col p-4">
        <h1 class="display-4"> </h1>
        <div class="card-column " id="orders_details">
        <?php
        
  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
  
 $sql="SELECT so.order_id,so.first_name,so.last_name,so.add1,so.add2,so.bank_name,so.txn_amount,so.txn_date,wo.Name,wo.service FROM `service_order` AS so INNER JOIN `worker` AS wo ON so.worker_id=wo.id 
  WHERE so.user_id=$user_id
";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 
  if($result->num_rows===0)
{

echo "     <div class='alert alert-danger'>
  <strong>Sorry!</strong> You don't have any order history
</div>     ";
}

else{	
			
  while ($array=$result->fetch_array()) 
{
  $order_id = $array['order_id'];
  $worker=$array['Name'];
  $service=$array['service'];
  $amount=$array['txn_amount'];
  $date=$array['txn_date'];
  $firstName=$array['first_name'];
  $lastName=$array['last_name'];
  $add1=$array['add1'];
  $add2=$array['add2'];
  $bankName=$array['bank_name'];
  

echo "
	
        <div class='card col-sm-6'>
          <div class='row'> 
            <h5 class='card-header col-sm-12 font-weight-semibold'> <i class='bi-gift'></i> Order ID : ".$order_id."</h5>
            <div class='card-body'>
               <ul>
               <li><h5>  <i class='fas fa-user-check'></i> Name : ".$firstName."".$lastName."</h5> </li>
               <li><h5>  <i class='fas fa-map-marker'></i> Address :".$add1.",".$add2."</h5> </li>
               <li><h5><i class='fas fa-user-cog'></i>  Service Man : ".$worker."</h5> </li>
               <li><h5>  <i class='fas fa-cogs'></i> Service : ".$service."</h5> </li>
               <li><h5>  <i class='fas fa-rupee-sign'></i> Charge Paid : ".$amount."</h5> </li>
               <li><h5>  <i class='fas fa-money-check-alt'></i> Payment Method :".$bankName."</h5> </li>
               <li><h5>  <i class='fas fa-calendar-check'></i> Date : ".$date."</h5> </li>
               </ul> 
            </div>
            </div>
        </div>
        ";
    }
}
?>
        </div>
<div id="main-user-profile" class="">
<div class="row">
	<div class="col-md-6">
	  <div class="card">
	  	<div class="card-header"><h4>User Profile</h4></div>
	  	<div class="card-body">
	  		<ul>
	  			<li class="p-3"><h5> <i class='fas fa-user-check text-info'></i>  
	  				Name - <?php echo $user_name; ?>
	  			</h5></li>

	  			<li class="p-3"><h5><i class='fas fa-phone text-info'></i>
	  				Mobile Number - <?php echo $user_mobile; ?>
	  			</h5> </li>

	  			<li class="p-3"><h5><i class='fas fa-paper-plane text-info'></i>
	  				Email - <?php echo $user_mail; ?></h5></li>
	  		</ul>
	  	</div>
	  </div>	
	</div>
	<div class="col-md-6">
		<img src="image/user-illus.svg" class="img-fluid" heigh>
	</div>
</div>
</div>
        <!--End of id main-user-profile-->
<div id="profileEdit" class="">
 <div class="row bg-light">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold"> <?php echo $user_name ;?> </span><span class="text-black-50"> <?php echo $user_mail; ?> </span><span>United States</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fas fa-long-arrow-alt-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <form action="" method="POST">
                <div class="row mt-2">
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="userfirstName" placeholder="first name" value= <?php echo $user_name ;?> >
                    </div>
                    <div class="col-md-6">
                       <input type="text" class="form-control" value="Doe"name="userlastName" placeholder="last">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control"name="userMail" placeholder="Email" value= <?php echo $user_mail ;?> >
                    </div>

                    <div class="col-md-6"><input type="text" class="form-control" name="userMobile" value= <?php echo $user_mobile;?> > </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="userAddress" placeholder="address" ></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="userState" placeholder="State"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Country" value=""name="userCountry"></div>
                    <div class="col-md-6"><input type="text" class="form-control"name="userPin"  placeholder="PIN/Zip Code"></div>
                </div>
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="userEditProfile">Save Profile</button></div>
            </div>
        </div>
    </div>

</div><!--End of profile Edit-->
<div class="" id="userResetPassword">
<div class="row bg-light">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold"> <?php echo $user_name ;?> </span><span class="text-black-50"> <?php echo $user_mail; ?> </span><span>United States</span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fas fa-long-arrow-alt-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Reset Password</h6>
                </div>
                <form action="" method="POST">
                <div class="row mt-2">
                    <div class="col-md-6">
                      <label for="userForgetPasEmail">Email</label>
                      <input type="text" class="form-control" name="userfirstName" placeholder="first name" value= <?php echo $user_mail ;?> >
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <label for="userOldPas">Enter your password</label>
                      <input type="password" class="form-control"name="userOldPas" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <label for="userNewPas">Enter New Password</label>
                      <input type="password" class="form-control" name="userNewPas" placeholder="" id="res" >
                    </div>
                    
                </div>
                
                <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit" name="userResetPassword">Reset Paasword</button>
                </div>
              </form>
            </div>
        </div>
    </div>
 </div>   
<!--End of forget pass-->

    </div><!-- Main Col END -->
</div><!-- body-row END -->
	</body>
	<script type="text/javascript">
		// Hide submenus
//$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon

$('#collapse-icon').addClass('fa-angle-double-left'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

$(window).on('load',function()
{
  $('#profileEdit').addClass('d-none');
     $('#orders_details').addClass('d-none');
     $('#userResetPassword').addClass('d-none');
     //$('#main-user-profile').hide();

     $('#orders').on('click',function()
{
     $('#orders_details').addClass('d-block');
     $('#main-user-profile').removeClass('d-block');
     $('#main-user-profile').addClass('d-none');
     $('#profileEdit').removeClass('d-block');
     $('#profileEdit').addClass('d-none');
     $('#userResetPassword').removeClass('d-block');
     $('#userResetPassword').addClass('d-none');
     
});

$('#profileEditBtn').on('click',function()
{
     
     $('#profileEdit').addClass('d-block');
     $('#orders_details').removeClass('d-block');
     $('#orders_details').addClass('d-none');
     $('#main-user-profile').removeClass('d-block');
     $('#main-user-profile').addClass('d-none');
     $('#userResetPassword').removeClass('d-block');
     $('#userResetPassword').addClass('d-none');
     
});

$('#myProfile').on('click',function()
{
     $('#main-user-profile').addClass('d-block');
     $('#profileEdit').removeClass('d-block');
     $('#profileEdit').addClass('d-none');
     $('#orders_details').removeClass('d-block');
     $('#orders_details').addClass('d-none');
     $('#userResetPassword').removeClass('d-block');
     $('#userResetPassword').addClass('d-none');
     
     
});

$('#resetPasswordBtn').on('click',function()
{
     $('#main-user-profile').removeClass('d-block');
      $('#main-user-profile').addClass('d-none');
     $('#profileEdit').removeClass('d-block');
     $('#profileEdit').addClass('d-none');
     $('#orders_details').removeClass('d-block');
     $('#orders_details').addClass('d-none');
     $('#userResetPassword').addClass('d-block');
     
     
     
});


});




function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
}
	</script>

</html>	