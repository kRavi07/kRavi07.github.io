<?php
session_start(); 
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
  .pricing-card {
    flex-direction: column;
    min-width: 0;
    color: #000;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #fff;
    border-radius: 6px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:visited,
.btn-primary:focus {
    background-color: #314666 !important;
    border-color: #314666 !important
}

body {
    background: #64748B
}

.ribbon {
  position: absolute;
  right: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; 
  height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: .8rem;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  width: 125px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#f01212 0%, #a70a36 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; right: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #a70a36;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #a70a36;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #a70a36;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #a70a36;
}
</style>  
</head>
<body>
<div class="container mt-5">
    <div class="row">
    <div class="col-sm-12 mb-3">
      <h4 class="text-center">ServiceDudes Subscription</h4>
    </div>  
      <?php
      $db = @new mysqli("localhost", "root", "" ,"service");
if($db->connect_error)
{
  exit("Connection failure");


}
$status="success";
 $sql=" SELECT * FROM `subscription`   ";
 $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
 //$array=$result->fetch_array();
  if($result->num_rows===0)
{

echo "     <div class='card'>
<h5 class='card-header'>
Sorry There is no " .$service. " available  right now. 
We will be available soon.
</h5>
</div>     ";
}

else{ 
      while ($array=$result->fetch_array()) 
      {
  $id = $array['id'];
  $image = $array['Image'];
  $Name = $array['sub_name'];
  $validity=$array['validity'];
  $max=$array['max_per_day'];
  $amount=$array['amount'];
  
   
    echo"   <div class='col-md-4'>
            <div class='pricing-card p-3 text-center py-5 mt-2'>
                <div class='ribbon'><span id='changeText'>POPULAR</span></div>
                <div class='images'><img src='".$image."' width='50'></div>
                <form action='subscription-cart.php' method='POST'>
                <input type='text' name='s_id' value=".$id." style='display:none;' >
                <h6 class='mt-3'>".$Name."</h6><span class='d-block font-weight-bold mt-3'>".$amount." PER MONTH</span>
                <button class='btn btn-primary shadow mt-4 px-5 rounded-pill' type='submit' name='submit'>Join</button>
                </form>
                <div class='mt-3'>
                <span class='d-block'>
                <i class='fa fa-check'></i>&nbsp; Max Per Day :".$max."
                </span>
                <span class='text-left'><i class='fa fa-check'></i>&nbsp;Access to stack Work</span>
                </div>
                <span class='text-left'><i class='fa fa-check'></i>&nbsp;Validtiy:
                ".$validity." </span>
                </div>
            </div>
        ";
      }
    }
       ?>
    </div>
</div>
</body>
</html>