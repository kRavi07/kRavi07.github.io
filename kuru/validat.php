<?php 
session_start();
If(empty('$_POST[submit]'))
{
 header("location:index.html");

}
else
{
    $db = @new mysqli("localhost", "id11153477_ayush", "LE}h=YPf@@XMeL?5" ,"id11153477_pubg");
if($db->connect_error)
{
  exit("Connection failure");


}

if(!empty($_POST['lead_game_id']))
{

$name=$_POST['real_name'];
$lead_id=$_POST['lead_game_id'];
$lead_game_name=$_POST['lead_game_name'];
$second_name=$_POST['second_name'];
$third_name=$_POST['third_name'];
$fourth_name=$_POST['fourth_name'];
$city=$_POST['city'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$refer=$_POST['refer'];

$refer_code= strtolower($lead_game_name.rand(1,200));
$refer_title="Hey Lets Play Pubg and Earnn Some Money Use my refer code :".$refer_code ;






$sql="SELECT * FROM `user_squad` WHERE `lead_game_id`='{$lead_id}'";
 $result=$db->query($sql);
 if($db->error)
  {
    //exit();
    header("location:index.html");
    
  }
  
if($result->num_rows>0)
{
  echo"<script>alert('Leader alredy exist')</script>";
  
}

$txt= "INSERT INTO user_squad values('$name','$lead_id','$lead_game_name','$second_name','$third_name','$fourth_name','$city','$email','$mobile','$refer_code','$refer',0)";

$db->query($txt);


$stmt= "SELECT * FROM user_squad WHERE `refer_code`='{$refer}' ";
  $res=$db->query($stmt);
  $array=$res->fetch_array();
  if($res->num_rows>0)
  {
  	$count=$array['refer_count'];
  	$ct = ++$count;
  	$stm="UPDATE user_squad SET refer_count='$ct' WHERE refer_code ='{$refer}'  ";
  	$db->query($stm);
  }
  
  if($db->error)
  {
    //echo $db->error;
     header("location:index.html");
    
  }
  
  
    echo" <div class='alert alert-success' role='alert'>
        <strong> Thanks for participating in this custom match</strong>
         Refer to your Friend and Earn

   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
 }

 else{
 	header("location:index.html");
 }    
  
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="profile.css">

</head>
<body>

<div class="container">
	<div class="row">
		     <div class="col-sm-4 logo">
				<img src="img/kurulogo.png" class="img-fluid ">
			</div>
		     <div class="col-sm-8"></div>
						
	</div>
</div>

<div class="container">
   <div class="row">
   	<div class="col-md-8"></div>
	<div class=" col-md-4 profile">
		<div class="row">
			<div class="col-md-12 text-center title">Team Profile</div>
			<div class="col-md-12">
				
				<form>
					<div class="form-group">
						<label for="leader_name">Team Leader Name</label>
						<input type="text" class="form-control" name="leader_name" disabled value=<?php echo 
					$lead_game_name	?> >
					</div>

					<div class="form-group">
						<label for="leader_id">Leader Game ID</label>
						<input type="text" class="form-control" name="leader_id" disabled value=<?php echo $lead_id ;?> >
					</div>

                 	<div class="form-group">
						<label for="first_player">First Player Name</label>
					<input type="text" class="form-control" name="first_player"  disabled value=<?php echo $second_name ; ?>>
					</div>

                   	<div class="form-group">
						<label for="second_player">Second Player Name</label>
						<input type="text" class="form-control" name="second_player"  disabled 
						value=<?php echo $third_name ; ?> >
					</div>

			    	<div class="form-group">
						<label for="third_player">Third Player Name</label>
						<input type="text" class="form-control" name="first_player"  disabled value=<?php echo $fourth_name ;?>>
					</div>

                    <div class="form-group">
						<label for="Mobile">Mobile No.</label>
						<input type="text" class="form-control" name="Mobile"  disabled value=<?php echo $mobile; ?>>
					</div>
                  
                  <div class="form-group">
                  	<span class="refer_span">Your Refer Code</span>
                  	<input type="text" name="" class=" text-center refer form-control" disabled=" " value=<?php echo $refer_code ;?>>
                  	<button class="btn btn-outline-success btn-sm copy" id="copy">Copy</button>
                  </div>
                  <div class="form-group text-center">
                  	<input type="submit" name="submit" class="btn btn-warning  edit " value="Edit">
                 
                  </div>


<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style " data-a2a-url="index.html" data-a2a-title="Hey Lets Play Pubg and Earnn Some Money Use my refer code" >
	
<a class="a2a_dd btn " href="https://www.addtoany.com/share"><i class="fa fa-share text-light share"> Refer & Earn</i></a>
<!--<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_telegram"></a>-->
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

				</form>
			</div>
		</div>
	</div>

	
   </div>
</div>


<script type="text/javascript">
	if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>