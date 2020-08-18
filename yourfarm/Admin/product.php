<html>
<head>
<link rel="stylesheet" type="text/css" href="product.css">

<link rel="stylesheet" type="text/css" href="nav.css">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head> 
<body>
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/yourfarm/subscription.html"><h3><img src="assets\image\logo.png" height="45px"> YourFarm Admin</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           <a href="http://localhost/yourfarm/subscription.html"  class="nav-link"><i class="fa fa-home"></i>&nbspDashboard</a>
           
           <a href="http://localhost/yourfarm/gallary.html" class="nav-link"><i class="fas fa-store"></i>&nbsp Add Products</a> 
          <a href="http://localhost/yourfarm/gallary.html" class="nav-link"><i class="fa fa-images"></i>&nbspGallary</a>
           <a href="contact.html" class="nav-link"><i class="fa fa-comments"></i>&nbspContact</a>
            <a href="cart.html" class="nav-link"><span class="icon-shopping_cart"><i class="fa fa-shopping-cart"></i>&nbspOrders</a>
              <a href="profile.php" class="nav-link btn-rounded btn-dark">My Account</a>

          </ul>
        </div>
      </div>
    </nav>
<!--End Of Navbar-->


<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h2 class="title text-center">Add Products to Stocks</h2>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-lg-6  align-item-centre mt-5 input_box">
<form method="post"  enctype="multipart/form-data">
<div class="row ">
<span class="col-sm-4">Product Id</span>  
<input type="text" name="pid" class="col-sm-6">
</div>


<div class="row">
  <span class="col-sm-4"> Product Name</span> 

 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" name="pnm" class="col-sm-6">
</div>

<div class="row">
  <span class="col-sm-4">Price</span> 
<input type="text" name="price" class="col-sm-6">

</div>

<div class="row">
  <span class="col-sm-4">Quantity</span> 
<input type="text" name="qty" class="col-sm-6">

</div>
<div class="row">
<span class="col-sm-4">Product Weight</span>
  <input type="text" name="weight" class="col-sm-6">
</div>
<div class="row">
<span  class="col-sm-4">Product Category</span>
  <br>
    <select name="categ" class="col-sm-3">
      <option >Fruits</option>
      <option >leafy Vegetable</option>
      <option >Exotic Vegetables</option>
      <option>Root</option>
      <option>Stem</option>

    </select>
      <select name="categ_id" class="col-sm-3">
      <option >1</option>
      <option >2</option>
      <option >3</option>
      <option>4</option>
      <option>5</option>

    </select>
    
</div>

<div class="row">
  <span class="col-sm-4">Product Description</span>
  <textarea class=" col-sm-6 mt-2" name="desc"></textarea>
</div>

<div class="row">

<span class="col-sm-4">Product Image</span><input type="file" name="myfile" onchange="preview_image(event)">
<img height="100px" width="100px"  id="pic" ></img>
</div>


<input id= "btn" type="submit" name="submit" value="register" class=" col-md-6 btn btn-dark btn-rounded mt-4 ">

</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$file="";
	move_uploaded_file($_FILES["myfile"]["tmp_name"],
      "upload/" . $_FILES["myfile"]["name"]);
$file="../upload/".$_FILES["myfile"]["name"];

//echo "<img src=".$file">"
   
  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}

     $created_date = date("Y-m-d H:i:s");
    
	$sql="INSERT INTO product values('".$_POST["pid"]."',NOW(),'".$_POST["pnm"]."',".$_POST["price"].",'".$_POST["qty"]."','".$_POST["weight"]."','".$_POST["categ"]."', '".$_POST["categ_id"]."' ,'".$_POST["desc"]."','".$file."')";
     $db->query($sql);
mysqli_close();
echo"<script>alert('saved successfully')</script>";


 
}
?>



<script>

function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('pic');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}



</script>


