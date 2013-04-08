<?php
include "connection.php";

//get user input from GET / POST method
/*
echo "<pre>";
print_r($_POST);
var_export($_POST);
echo "</pre>";
*/

$data= $_POST;
$action = $_GET['action'];
$submit = $data['submit'];

$username = $data['username'];
$password = $data['password'];
$email = $data['email'];
$user_type = $data['usertype'];
$first_name = $data['firstname'];
$mid_name = $data['midname'];
$last_name = $data['lastname'];
$phone = $data['phone'];
$address = $data['address'];
$website = $data['website'];
$created_at = time();

function validation(){
	
	if($username == ""){
	echo "Please enter athe user name";
	break;
	}
	else if($username == ""){
	echo "Please enter athe user name";
	break;
	}
	else if($username == ""){
	echo "Please enter athe user name";
	break;
	}
	else if($username == ""){
	echo "Please enter athe user name";
	break;
	}
	if($username == ""){
	echo "Please enter athe user name";
	break;
	}
	

}
if ($action=="update") {

$id = $data['userid'];

//server side validation of input data
//build query
 $sql = "update `users` set `username` = \"$username\", `password` = \"$password\", `email` = \"$email\", `first_name`= \"$first_name\", `mid_name` = \"$mid_name\", `last_name` =\"$last_name\", `phone` = \"$phone\", `address` = \"$address\", `website` = \"$website\", `created_at` =$created_at , `user_type`= $user_type where `id` = $id ;";
} else { // insert date

//build query
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `created_at`, `user_type`) VALUES (NULL, \"$username\", \"$password\", \"$email\", \"$first_name\", \"$mid_name\", \"$last_name\", \"$phone\", \"$address\", \"$website\", $created_at, $user_type);";
}
mysql_query	($sql);				
header ("Location: ../users.php");

					
			
?>