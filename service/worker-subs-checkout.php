<?php 
session_start();
if(isset($_POST['checkout']))
{
	$worker_name=$_SESSION['worker_name'];
	$worker_id=$_SESSION['worker_id'];
	$worker_mail=$_SESSION['worker_mail'];
	$worker_image=$_SESSION['worker_image'];
   $worker_service=$_SESSION['worker_service'];
   $worker_mobile=$_SESSION['worker_mobile'];
   

 $sub_name= $_SESSION['sub_name'];
  $image=$_SESSION['image'];
  $validity =$_SESSION['sub_validity'];

  $max =$_SESSION['max_per_day'];

  $sub_id=$_SESSION['sub_id'];
  $amount=$_SESSION['amount'];
  $gst=$amount*.05;
  $total=$_SESSION['total'];
  $ORDER_ID="SDW".rand(1000,99999);
}
else
{

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
<style type="text/css">
	body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #EF5350;
    background-repeat: no-repeat
}

.card {
    padding: 30px 25px 35px 50px;
    border-radius: 30px;
    box-shadow: 0px 4px 8px 0px #B71C1C;
    margin-top: 50px;
    margin-bottom: 50px
}

.border-line {
    border-right: 1px solid #BDBDBD
}

.text-sm {
    font-size: 13px
}

.text-md {
    font-size: 18px
}

.image {
    width: 60px;
    height: 30px
}

::placeholder {
    color: grey;
    opacity: 1
}

:-ms-input-placeholder {
    color: grey
}

::-ms-input-placeholder {
    color: grey
}

input {
    padding: 2px 0px;
    border: none;
    border-bottom: 1px solid lightgrey;
    margin-bottom: 5px;
    margin-top: 2px;
    box-sizing: border-box;
    color: #000;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: 500
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #EF5350;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn-red {
    background-color: #EF5350;
    color: #fff;
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 18px;
    letter-spacing: 2px;
    border: 2px solid #fff
}

.btn-red:hover {
    box-shadow: 0 0 0 2px #EF5350
}

.btn-red:focus {
    box-shadow: 0 0 0 2px #EF5350 !important
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #EF5350
}

@media screen and (max-width: 575px) {
    .border-line {
        border-right: none;
        border-bottom: 1px solid #EEEEEE
    }
}
</style>		
</head>
<body>
<div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
            <div class="card border-0">
                <div class="row justify-content-center">
                    <h3 class="mb-4">Credit Card Checkout</h3>
                </div>
                <div class="row">
                	
                    <div class="col-sm-7 border-line pb-3">
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Name </p> 
                            <input type="text" name="worker_name"  size="20"value=<?php echo $worker_name;?> disabled>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Email</p>
                            <div class="row px-3"> 
                            <input type="text" name="worker_mail" placeholder="example@gmail.com" size="25" id="cr_no" minlength="19" maxlength="19" value=<?php echo $worker_mail; ?> disabled>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Mobile</p> 
                            <input type="text" name="worker_mob"  size="20" id="exp" minlength="10" maxlength="10" value=<?php echo $worker_mobile; ?> disabled>
                        </div>
                        <div class="form-group">
                            <p class="text-muted text-sm mb-0">Service</p> <input type="text" name="service"  size="20" minlength="20" maxlength="20" value=<?php echo $worker_service?> disabled>
                        </div>
                         <div class="form-group">
                            <p class="text-muted text-sm mb-0">Address 1</p> <input type="password" name="add1" placeholder="HouseNew Street" size="20" minlength="20" maxlength="20">
                        </div>
                         <div class="form-group">
                            <p class="text-muted text-sm mb-0">Address 2</p> <input type="password" name="add2" placeholder="INDIA" size="20" minlength="20" maxlength="20">
                        </div>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input" checked> <label for="chk1" class="custom-control-label text-muted text-sm">Agree with terms and condition</label> </div>
                        </div>
                    </div>
                 <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4">
                 <form method="post" action="Gateway\PaytmKit\pgRedirect.php">  
          <table border="1" class="d-none" >
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value=<?php echo  $ORDER_ID ?>>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value=<?php echo  $worker_id?>>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $total?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
				</tr>
			</tbody>
		</table>
                 	<small class="text-sm text-muted">Order number</small>
                        <h5 class="mb-5"><?php echo $ORDER_ID ;?> </h5>
                        <small class="text-sm text-muted">Subscription</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class="">
                            	<span class="text-danger"><?php echo $sub_name ?></span>
                            </h2>
                        </div>
                    	<small class="text-sm text-muted">Validity</small>
                        <h5 class="mb-5"><?php echo $validity ;?> MONTHS</h5>
                        <small class="text-sm text-muted">Payment amount</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class="">
                            	<span class="text-md font-weight-bold mr-2">&#8377</span><span class="text-danger"><?php echo $total; ?></span>
                            </h2>
                        </div> 
                        <button type="submit" name="pay" class="btn btn-red text-center mt-4">PAY</button>
                        </form> 
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>