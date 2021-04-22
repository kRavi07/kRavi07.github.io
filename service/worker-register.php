<?php
session_start();
?>

<html>
<title>
  
</title>
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

  <link rel="stylesheet" type="text/css" href="css/login.css">

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<head>
</head>
<body>







<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

require 'vendor/autoload.php';


function random_str(
    int $length = 64,
    string $keyspace = '0123456789'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}




if(!empty($_POST['signup']))
{ 
  
  $Name=addslashes($_POST['name']);

  $password=md5(addslashes($_POST['pas']));
  $service=$_POST['service'];
  $mobile=$_POST['mobile'];
  $charge=$_POST['charge'];
  $email=$_POST['mail'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pin=$_POST['pin'];
  
$db = @new mysqli("localhost","root","","service");

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$txt="SELECT * FROM `worker` WHERE `Email`='{$email}'";
$result=$db->query($txt);
if($result->num_rows===0)
{

 
$target_dir = "uploads/";


$target_file = $target_dir.basename($_FILES["id_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["id_file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }




// Check if file already exists
if (file_exists($target_file)) 
 {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
 }



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
 {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else
 {
  if (move_uploaded_file($_FILES["id_file"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["id_file"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


//Worker Image
$image_file = $target_dir.basename($_FILES["image_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($image_file,PATHINFO_EXTENSION));


  $check = getimagesize($_FILES["image_file"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk = 0;
  }




// Check if file already exists
if (file_exists($image_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $image_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["image_file"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}









  $sql= "INSERT INTO worker values('','$Name','$mobile','$email','$service','$charge','$image_file','$target_file','$city','$state',
  '$pin','$password','','')";

  $db->query($sql);
  if($db->error)
  {
    echo $db->error;
    
  }
  
  $otp=random_str(4);
  // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com'; 
                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'servicedude.info@gmail.com';                     // SMTP username
    $mail->Password   = 'Servicedude@2021';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


    //Recipients
    $mail->setFrom('servicedude.info@gmail.com', 'ServiceDude');
    $mail->addAddress( $email, $Name );     // Add a recipient
                   // Name is optional
    $mail->addReplyTo('no@reply.com', 'Information');
    $mail->addCC('cc@reply.com');
    $mail->addBCC('bcc@reply.com');

    // Attachments
    //$mail->addAttachment('image/1.jpg');         // Add attachments
    //$mail->addAttachment('image/1.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'ServiceDude Registration Email Verification';
    $mail->Body    = '<h2> ServiceDude </h2>
    <p> Thank you<b>'.$Name.'</b> for registring on SocialDude.</p>
    <p>Your otp for verification is:'.$otp.'</p>
    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $sql= "UPDATE `worker` SET `otp`='".$otp."' WHERE `Email`='".$email."' ";
    $result=$db->query($sql);
 if($db->error)
  {
    echo $db->error;
    
  }
else {
  $_SESSION['worker_otp']=$otp;
  $_SESSION['worker_mail']=$email;
echo 
"<div class='alert alert-success'>
       <strong>Sent!</strong> Otp has ben sent to  ".$email."
</div>
<div class='d-flex justify-content-center align-items-center container'>
    <div class='card py-5 px-3'>
        <h5 class='m-0'>Email verification</h5>
        <span class='mobile-text'>Enter the code we just send on your mail
         <b class='text-danger'>".$email."</b>
        </span>
        <div class='d-flex flex-row mt-5'>
        <form action='worker-mail-verification.php' method='POST'>
        <input type='text' class='form-control'name='otp' autofocus=''>
        <input type='text' class='form-control'name='d_mail' value=".$email." style='display:none;'>
        </div>
        <div class='text-center mt-5'>
        <span class='d-block mobile-text'>Don't receive the code?</span>
        <span class='font-weight-bold text-danger cursor'>Resend</span>
        </div>
        <input type='submit' class='btn btn-success rounded-pill' name='verify'  placeholder='Enter OTP'>
        </form>
        </div>
    </div>
</div>";

}

    
} 
catch (Exception $e)
 {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
   
    
  
}
else
 echo "<div class='alert alert-danger'>
       <strong>Sent!</strong> User alredy exist
</div>";

  
}







?>

</body>
</html>