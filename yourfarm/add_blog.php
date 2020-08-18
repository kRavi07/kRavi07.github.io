<?php
session_start();




  $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
  exit("Connection failure");


}

$date=date(" Y-m-d ");
if(isset($_POST['submit']))
{

	$file="";
	move_uploaded_file($_FILES["bimage"]["tmp_name"],
      "upload/" . $_FILES["bimage"]["name"]);
$file="../upload/".$_FILES["bimage"]["name"];


$title=$_POST['blog_title'];



$content=htmlentities (stripslashes(trim($_POST['main_content'])));





$sql ="INSERT INTO `blog` (title,blog_date,image,main_content) values('$title','$date','$file','$content') " ;
$result= $db->query($sql);
if($db->error)
{
	echo $db->error;
}

echo"<script>
            if (confirm('Blog Published Successfully')) {
              window.location='admin_blog.php';
                         }  
                         else
                         { window.location='admin_dashboard.php'; }                 

        </script>"; 
      

}
else
{
echo "fail"; }
?>