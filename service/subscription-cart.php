<?php
session_start();

if(isset($_POST['submit']))
{
  $id=$_POST['s_id'];
  echo $id;

  $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
$status="success";
  
  $sql=" SELECT * FROM `subscription` WHERE `id`='{$id}'   ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{

echo "     <div class='alert alert-danger'>
  <strong>Your Service Cart is empty. Please select a service.</strong> 
</div>     ";
}

else{ 
      while ($array=$result->fetch_array()) 
      {
  $_SESSION['sub_name']=$name=$array['sub_name'];
  $_SESSION['image']=$image=$array['Image'];
  $_SESSION['sub_validity']=$validity = $array['validity'];

  $_SESSION['max_per_day']=$max = $array['max_per_day'];

  $_SESSION['sub_id']=$sub_id=$array['id'];
  $_SESSION['amount']=$amount=$array['amount'];
  $gst=$amount*.05;
  $_SESSION['total']=$total=$amount+$gst;
}
}
 
}
?>
<!DOCTYPE html>
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

  

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	
</head>
<body>
  <?php require('navbar.php')?>
<div class="px-4 px-lg-0">
  
  <div class="container text-dark py-5 text-center">
    <h1 class="display-4">Checkout</h1>
    
  </div>
  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Subscription</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Charges</div>
                  </th>
                  
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src='<?php echo $image; ?>' alt="" width="150rem" height="150rem" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle"><?php echo $name;  ?></a></h5><span class="text-muted font-weight-normal font-italic d-block">Validity: <?php echo $validity; ?></span>
                        <span class="text-muted font-weight-normal font-italic d-block">City: <?php echo $max; ?></span>
                        <span>Name:<?php echo $_SESSION['worker_mail'];?></span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong><i class="fas fa-rupee-sign"></i><?php echo $amount; ?></strong></td>
                  
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                </tr>
                
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <form action="worker-subs-checkout.php" method="POST">
            <ul class="list-unstyled mb-4">
              
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong><i class="fas fa-rupee-sign"></i><?php echo $amount; ?></strong></li>
              
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Service Tax(5%)</strong><strong><i class="fas fa-rupee-sign"></i><?php echo $gst; ?></strong></li>

              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold"><i class="fas fa-rupee-sign"></i><?php echo $total; ?></h5>
              </li>
            </ul><input  type="submit" value="Procceed to Address Detail" name="checkout" class="btn btn-dark rounded-pill py-2 btn-block">
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php require('footer.php')?>
</body>
</html>