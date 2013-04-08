<?php
if(isset($_POST['submit'])) {
include "connection.php";

//get user input from GET / POST method

$action = $_GET['action'];


$data= $_POST;
$submit = $data['submit'];
/*$coursename = $data['coursename'];
$description = $data['description'];*/

//server side validation of input data
if(trim($_POST['coursename']) == '') {
		$hasError = true;
		$coursename_error = "Please Enter the Course Name";
	} else {
		$coursename = trim($_POST['coursename']);
	}

	//Check to make sure that the password field is not empty
	if(trim($_POST['description'] )== '') {
		$hasError = true;
		$description_error = "Please specify the Description";
	} else {
		$description = trim($_POST['description']);
	}
if(!$hasError == true){
if ($action=="update") {
$id = $data['courseid'];

//server side validation of input data
//build query
$sql = "update `courses` set `name` = \"$coursename\", `description` = \"$description\" where `id` = $id ;";

} else { // insert date
//build query
$sql = "INSERT INTO `courses` (`id`, `name`, `description`) VALUES (NULL, \"$coursename\", \"$description\");";
}

mysql_query	($sql);				
header ("Location: course.php");
}						
}		
?>