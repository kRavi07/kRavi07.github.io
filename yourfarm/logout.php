<?php
session_start();
unset($_SESSION['name']);

unset($_SESSION['mail']);

unset($_SESSION['mobile']);
session_destroy();
header("location:index.php");


?>