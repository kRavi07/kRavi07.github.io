<?php
session_start();

if(empty($_SESSION['admin_mail']))
{
  echo      "<script>   
     if (confirm('Admin ! Please Login First')) {
              window.location='admin_login.php';
                         }  
                         else
                         { window.location='admin_login.php'; } </script>" ;
    
   
}



  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}

$list = "SELECT * FROM signup " ;
$result= $db->query($list);
if($db->error)
  {
    echo $db->error;
    
  }
  $total_user= mysqli_num_rows($result);

$stmt = "SELECT * FROM orders  WHERE `status`='success' " ;
$result_stmt= $db->query($stmt);
if($db->error)
  {
    echo $db->error;
    
  }
  $total_order= mysqli_num_rows($result_stmt);



$query = "SELECT * FROM orders";
$query_run = $db->query($query);

$qty= 0;
while ($num = mysqli_fetch_assoc ($query_run)) {
    $qty += intval($num['amount']);
}



$subs = "SELECT * FROM signup " ;
$result= $db->query($subs);
if($db->error)
  {
    echo $db->error;
    
  }
  $total_subs= mysqli_num_rows($result);

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>YourFram : Admin Panel</title>


<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
 
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
  <!-- DataTables CSS -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script src="js/addons/datatables.min.js" type="text/javascript"></script>



<!-- DataTables Select CSS -->
<link href="css/addons/datatables-select.min.css" rel="stylesheet">
<!-- DataTables Select JS -->
<script src="js/addons/datatables-select.min.js" type="text/javascript"></script>
</head>

<body class="sidebar-menu-collapsed">
  <div class="se-pre-con"></div>
<section>
  <!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
    <div class="logo">
      <h1><a href="index.html">YourFram</a></h1>
    </div>

  <!-- if logo is image enable this 
    image logo 
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
     //image logo -->

    <div class="logo-icon text-center">
      <a href="" title="logo"><img src="assets/images/logo.png" alt="logo-icon"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li class="active"><a href=""><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
        </li>
        <li class="active"><a href="admin_blog.php"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  <!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
          <div class="profile_details float-right">
            <ul>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->
  <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary"></span>, Welcome back</h1>
      
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number"><?php echo $total_user ; ?></h3>
                <p class="stat-text">Total Users</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-thumbs-up"> </i>
                <h3 class="text-secondary number"><?php echo $total_user ; ?></h3>
                <p class="stat-text">Newsletter Subscriber</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-heart"> </i>
                <h3 class="text-success number"> <?php echo "Rs " .$qty ; ?></h3>
                <p class="stat-text">Toatl Sales</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-danger number"><?php echo $total_order ; ?></h3>
                <p class="stat-text">Total Order</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- charts -->
    <div class="chart">
      <div class="row">
        <h4 class="col-sm-6 text-primary">User Details</h4>
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Mobile
      </th>
      <th class="th-sm">Email
      </th>
      
    </tr>
  </thead>
  <tbody>

<?php 
 $stmnt = "SELECT * FROM `signup` ";
 $result=$db->query($stmnt);
 if($db->error)
  {
    echo $db->error;
    
  }
 

  while ($array=$result->fetch_array()) {

echo 
    "<tr>
      <td>".$array['Name']. "</td>
      <td>".$array['Mobile']. "</td>
      <td>".$array['Email']. "</td>
      
    </tr>";}
    ?>
  </tbody>
  
</table>


      </div>
    </div>
    <!-- //charts -->



 <div class="chart">
      <div class="row mt-5" >
        <h4 class="col-6 text-primary">Order Details</h4>
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">First Name
      </th>
      <th class="th-sm">Last Name
      </th>
      <th class="th-sm">Order ID
      </th>
      <th class="th-sm">Product
      </th>
      <th class="th-sm">Subscription Type
      </th>
      <th class="th-sm">Amount
      </th>
      <th class="th-sm">Bank Transaction ID
      </th>
      <th class="th-sm">Payment Method
      </th>
      <th class="th-sm">Address 1
      </th>
      <th class="th-sm">Address 2
      </th>
      <th class="th-sm">Mobile
      </th>
      <th class="th-sm">Pin
      </th>
      <th class="th-sm">Status
      </th>
    </tr>
  </thead>
  <tbody>
    <?php 
 $stmnt = "SELECT * FROM `orders` ";
 $result=$db->query($stmnt);
 if($db->error)
  {
    echo $db->error;
    
  }
 

  while ($array=$result->fetch_array()) {

echo 
    "<tr>
      <td>".$array['first_name']. "</td>
      <td>".$array['last_name']. "</td>
      <td>".$array['order_id']. "</td>
      <td>".$array['subs']. "</td>
      <td>".$array['subs_type']. "</td>
      <td>".$array['amount']. "</td>
       <td>".$array['bank_txn_id']. "</td>
      <td>".$array['pay_method']. "</td>
      

       <td>".$array['address1']. "</td>
      <td>".$array['address2']. "</td>
      <td>".$array['mobile']. "</td>
      <td>".$array['pin']. "</td>
      <td>".$array['status']. "</td>
      
    </tr>";}
    ?>

  </tbody>
  
</table>


      </div>
    </div>
    






<!--Newletter Subscriber -->



 <div class="chart">
      <div class="row mt-5">
        
        <div class="col-4">
          <h4 class="col-12 text-primary">Newsletter Subscriber</h4>
      <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">SI NO.
      </th>
      <th class="th-sm">Email
      </th>
     
    </tr>
  </thead>
  <tbody>
    
<?php 
 $stmnt = "SELECT * FROM `subscriber` ";
 $result=$db->query($stmnt);
 if($db->error)
  {
    echo $db->error;
    
  }
 

  while ($array=$result->fetch_array()) {

echo 
    "<tr>
      <td>".$array['subs_id']. "</td>
      <td>".$array['Email']. "</td>
      
      
    </tr>";}
    ?>
  </tbody>
  
</table>
</div>
<!--Farm Booking -->
<div class="col-8">
   <h4 class="col-12 text-primary">Farm booking Details </h4>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">SI NO.
      </th>
      <th class="th-sm">Name
      </th>
      <th class="th-sm">Mobile.
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Query
      </th>
      
     
    </tr>
  </thead>
  <tbody>
    
<?php 
 $stmnt = "SELECT * FROM `land_sub` ";
 $result=$db->query($stmnt);
 if($db->error)
  {
    echo $db->error;
    
  }
 

  while ($array=$result->fetch_array()) {

echo 
    "<tr>
      <td>".$array['id']. "</td>
      <td>".$array['Name']. "</td>
      <td>".$array['Mobile']. "</td>
      <td>".$array['Email']. "</td>
      <td>".$array['query']. "</td>
      
      
    </tr>";}
    ?>
  </tbody>
  
</table>
</div>

      </div>
    </div>








<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-1.10.2.min.js"></script>

<!-- chart js -->
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/utils.js"></script>
<!-- //chart js -->

<!-- Different scripts of charts.  Ex.Barchart, Linechart -->
<script src="assets/js/bar.js"></script>
<script src="assets/js/linechart.js"></script>
<!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- close script -->
<script>
  var closebtns = document.getElementsByClassName("close-grid");
  var i;

  for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function () {
      this.parentElement.style.display = 'none';
    });
  }
</script>
<!-- //close script -->

<!-- disable body scroll when navbar is in active -->
<script>
  $(function () {
    $('.sidebar-menu-collapsed').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll when navbar is in active -->

 <!-- loading-gif Js -->
 <script src="assets/js/modernizr.js"></script>
 <script>
     $(window).load(function () {
         // Animate loader off screen
         $(".se-pre-con").fadeOut("slow");;
     });
 </script>
 <!--// loading-gif Js -->

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
  -->