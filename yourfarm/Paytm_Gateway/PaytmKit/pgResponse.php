<?php
session_start();
 $mail=$_SESSION['mail'];
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE" && !empty($_POST["TXNID"])) {
	
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		if(!empty( $_POST["ORDERID"]) && !empty($_POST["TXNID"]))
		{
			    $order_id=$_POST["ORDERID"];
			    $txn_amnt=$_POST["TXNAMOUNT"]; 
			 $pay_met=$_POST["BANKNAME"];
			 $txn_id=$_POST["TXNID"];
			 $bank_id=$_POST["BANKTXNID"];
			 $txn_date=$_POST["TXNDATE"];
			 $mail=$_SESSION['mail'];
  $_SESSION['name'];
  $qty=$_SESSION['qty'];
 $mobile= $_SESSION['mobile'] ;
  $f_name =$_SESSION['f_name'];
 $l_name=$_SESSION['l_name'];
$add1= $_SESSION['add1'];
$add2= $_SESSION['add2'];
$pin= $_SESSION['pin'];
$box=  $_SESSION['box'];
$subs_type=$_SESSION['subscription'];

//session strore
$_SESSION['ORDERID']=$_POST["ORDERID"];
$_SESSION['TXNAMOUNT']=$_POST["TXNAMOUNT"];
$_SESSION['BANKNAME']=$_POST["BANKNAME"];
$_SESSION['TXNID']=$_POST["TXNID"];
   




echo " 
 <div class='modal fade' id='centralModalSuccess'  role='dialog' data-backdrop='false'>
   <div class='modal-dialog modal-lg modal-notify modal-success' role='document'>
     <!--Content-->
     <div class='modal-content'>
       <!--Header-->
       <div class='modal-header'>
         <p class='heading lead'>Transaction Successfull </p>

         
       </div>



       <!--Body-->
       <div class='modal-body'>
         <div class='text-center'>
           <i class='fas fa-check fa-4x mb-3 animated rotateIn'></i>
           <h1>Successfull</h1>
         </div>
         <div>
         	<strong>Order Id : </strong> <span> ".$_POST['ORDERID']." </span></br>
         	<strong>Transaction Id : </strong> <span> ".$_POST['TXNID']." </span></br>
         	<strong>Date :</strong>".$_POST["TXNDATE"]." </br>
         
         	<strong>Amount Paid : </strong> <span> ".$_POST['TXNAMOUNT']." </span></br>
         	<strong>Payment Method : </strong> <span> ".$_POST['BANKNAME']." </span></br>

         	<strong>Your Subscription : </strong> <span> ".$_SESSION['box']." </span></br>
         	<strong>Quantity:</strong> ".$qty." </br>


            <strong> Subscription Type : </strong> <span>".$_SESSION['subscription']." </span></br>
          
           

         	<strong>Address : </strong> <span>".$_SESSION['f_name']." ".$_SESSION['l_name']."
         	   ".$_SESSION['add1']." ".$_SESSION['add2']." ".$_SESSION['pin']."</br>	
         	 <strong>   Email :</strong> ".$_SESSION['mail']."</br> <strong> Mobile :</strong>".$_SESSION['mobile']."</span></br>



         </div>
       </div>

       <!--Footer-->
       <div class='modal-footer justify-content-center'>
         
         <a type='button' class='btn btn-success'>Back TO Home <i class='fa fa-home ml-1 text-white'></i></a>
         <form action='../../print.php' method='POST' >
         <input type='submit' name='submit' class='btn btn-outline-success waves-effect' value='Get Invoice' >
         <form>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div> ";
  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}


  $sql= "INSERT INTO orders values('$mail','$box','$subs_type','$qty','$txn_amnt','$order_id','$txn_id','$bank_id','$pay_met','$f_name','$l_name','$add1','$add2','$pin','$mobile','$txn_date','success')";
  $db->query($sql);
  if ($db->query($sql) === TRUE) {
    
} else {
    
}

$db->close();
 

		}
		}

	}
	else {
		echo "<div class='modal fade' id='centralModalDanger'data-backdrop='false'  role='dialog'>
   <div class='modal-dialog modal-lg modal-notify modal-danger' role='document'>
     <!--Content-->
     <div class='modal-content'>
       <!--Header-->
       <div class='modal-header'>
         <p class='heading lead'>Transaction Failed </p>

         
       </div>



       <!--Body-->
       <div class='modal-body'>
         <div class='text-center'>
           <i class='fa fa-times fa-4x mb-3 animated rotateIn'></i>
           <h1>Transaction Failed</h1>
         </div>
         <div>
         	<strong>Order Id : </strong> <span> ".$_POST['ORDERID']." </span></br>
         	<strong>Amount  : </strong> <span> ".$_POST['TXNAMOUNT']." </span></br>
        
         	
         	<strong>If your money has been debited it will credited back in 7 working days.</strong>
         	<strong>Thanks</strong>




         </div>
       </div>

       <!--Footer-->
       <div class='modal-footer justify-content-center'>
         <a type='button' href='../../index.php' class='btn btn-success'>Back to Home<i class='fa fa-home ml-1 text-white'></i></a>
         
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div> ";

$TXNAMOUNT=$_POST["TXNAMOUNT"];
$ORDERID=$_POST["ORDERID"];
$date=Date("jS  F Y");
$db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");
}


  $sql= "INSERT INTO orders values('$mail','','','$TXNAMOUNT','$ORDERID','','','','','','','','','','$date','failed')";
  $db->query($sql);
  if ($db->query($sql) === TRUE) {
    
} else {
    
}

$db->close();
 

	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				//echo "<br/>" . $paramName . " = " . $paramValue;
			 
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

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


</head>
<body>


 
 <!-- Central Modal Medium Success-->


 <script type="text/javascript">
 	$(document).ready(function()
 	{
       $('#centralModalSuccess').modal('show');
       $('#centralModalDanger').modal('show');
 	});
 </script>
</body>
</html>