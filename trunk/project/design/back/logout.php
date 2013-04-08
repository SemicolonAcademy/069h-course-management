<?php 
session_start();

session_start();
unset($_SESSION['login']); 
unset($_SESSION['email']); 

//You have to call session_start() before you call session_destroy();
session_destroy();

header ("location: index.php");

?>
