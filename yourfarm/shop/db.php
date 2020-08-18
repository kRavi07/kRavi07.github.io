<?php

     $db = @new mysqli("localhost", "root", "" ,"yourfarm");
if($db->connect_error)
{
	exit("Connection failure");
}


?>