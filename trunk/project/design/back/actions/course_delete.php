<?php
include "connection.php";

//get user input from GET / POST method

$id= $_GET['id'];

if ($id) {

//build query
$sql = "delete from `courses` where `id`=$id limit 1;";

mysql_query	($sql);				

header ("Location: ../course.php");

}	
	
	
			
?>