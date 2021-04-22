
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="nav.css">
  </head>
<body><div class="top py-1 bg-dark text-light">
        <div class="container">
           <div class="row ">
            
             <marquee  >Welcome to YourFarm. We are currently working in Patna only.</marquee>

    

           </div>
       </div>
    </div>


    <nav class="navbar navbar-expand-lg blue-grey dark" style="padding-bottom: 0;margin-bottom: 0;">
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
        <a class="nav-link text-light" href="blog/blog.php">Blog</a>
      </li>
      

         
    </ul>

    <?php if(empty($_SESSION['mail']))
    {
    echo "<a href='' class='btn btn-success pr-5 ' data-toggle='modal' data-target='#modalLRForm'> LogIn/Register</a>";
    }
    else
    {
       echo "<a href='profile.php' class='btn btn-success btn-rounded pl-3' > <i class='fa fa-user'></i> My Account</a>
         
           
        
               ";
    }?>
  </div>
</nav>


</body>
</html>