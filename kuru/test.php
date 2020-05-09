<?php

 $db = @new mysqli("localhost", "root", "" ,"pubg");
if($db->connect_error)
{
  exit("Connection failure");


}



$txt= "INSERT INTO user_duo values('name','1232','lead_game_name','second_name','564','city','email','632145','refer_code','refer',0)";

$db->query($txt);

 
  if($db->error)
  {
    echo $db->error;
     //header("location:index.html");
    
  }
  echo "Success";
?>