 
<?php
session_start();
 if(empty($_SESSION['mail']))
 {
  echo "<script>
            if (confirm('Please Login first')) {
              window.location='login.php';
                         }  
                         else
                         { window.location='signup.php'; }                 

        </script>";
 }
 
?>


<!DOCTYPE html>
<html>
<head>
    <title>My Subscriptions</title>

     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/order.css">
  <link rel="stylesheet" href="css/sidenav/style.css">
  
</head>
<body>


<?php require_once('nav.php'); ?>


<div class="container-fluid mt-1  d-flex" style="margin-top: 1em; ">

<div class="row">
    <div class="col-3" style="padding-left: 0; z-index: 10; padding-top: 0; margin-top: 0;" >
    
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <div class="p-4 pt-5 pb-5">
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
            <form action="newsletter.php" method="POST" class="">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Enter Email Address" name="sub_email"> 
                
              </div>
              <button class="btn btn-success btn-sm" name="submit" type="submit">Subscribe</button>
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
    </div>




    <div class="col-9 ml-5">
    <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0 ml-auto">Your Subscription </h4>
                </div>

                
            </div>
        </div>


             <?php
         
     $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}
else
{
  
}
  $stats = "success";
  $mail = $_SESSION['mail'];
 $sql="SELECT * FROM `orders` WHERE `email`='{$mail}' AND `status`= '{$stats}'  ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{
  
echo "

        <div class='card-body'>
            
            <div class='row'>
                <div class='col'>
                    <div class='card card-2'>
                        <div class='card-body'>
                            <div class='media'>
                                <h5 class='text-center'> Sorry You have no Subscription right Now. </h5>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>"; }
  else
  {

  while ($array=$result->fetch_array()) {
  $subs = $array['subs'];
  $date = $array['txn_date'];
  $amnt = $array['amount'];
  $order_id =$array['order_id'];
  $txn_id = $array['txn_id'];
  $qty = $array['qty'];
  $sub_type = $array['subs_type'];
  $add = $array['address1'].",".$array['address2'].",".$array['pin'].",".$array['mobile'];

                                     
  echo "

        <div class='card-body'>
            
            <div class='row'>
                <div class='col'>
                    <div class='card card-2'>
                        <div class='card-body'>
                            <div class='media'>
                                <div class='sq align-self-center '> <h6>".$array['subs']."</h6>  </div>
                                <div class='media-body my-auto text-right'>
                                    <div class='row my-auto flex-column flex-md-row'>
                                        <div class='col my-auto'>
                                            <h6 class='mb-0'> </h6>
                                        </div>
                                        
                                        <div class='col my-auto'> <small>" .$sub_type. "</small></div>
                                        <div class='col my-auto'> <small>".$qty."</small></div>
                                        <div class='col my-auto'>
                                            <h6 class='mb-0'>&#8377; ".$amnt."</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class='my-3' >
                            <div class='row'>
                                <div class='col-md-3 mb-3'> <small> ".$date." <span><i class='ml-2 fa fa-refresh' aria-hidden='true'></i></span></small> </div>
                                <div class='col mt-auto'>
                                    
                                    <div class='media row justify-content-between '>
                                        <div class='col'><h6>TXN ID</h6> <small>".$txn_id."</small> </div>
                                          <div class='col'><h6>Order Id</h6> <small>".$order_id."</small> </div>
                                            <div class='col'><h6>Address</h6><small>".$add."</small></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>"; }}?>

            <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                    <div class="col-sm-auto col-auto my-auto"><img class="img-fluid my-auto align-self-center " src="image/logo.png" width="115" height="115"></div>
                    <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold"></h2>
                    </div>
                    <div class="col-auto my-auto ml-auto">
                        <h4 class="display-3 "> YourFarm</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php require_once('foot.php')?>
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

<!--
    
