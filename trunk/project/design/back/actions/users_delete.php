<?php
include "connection.php";

//get user input from GET / POST method

$id= $_GET['id'];


if ($id) {

		$sql = "select `picture` from `users` where `id`=$id;";
		$r = mysql_query($sql);				
		$pic = mysql_fetch_assoc($r);
		$picture_from_db = $pic['picture'];		

		if ($picture_from_db!= "") {
			$filename = "../uploads/" . $picture_from_db ;
			unlink($filename);
		}	

		$delsql = "delete from `users` where `id`=$id limit 1;";
		mysql_query	($delsql);						
	
}

header ("Location: ../users.php");

	
			
?>