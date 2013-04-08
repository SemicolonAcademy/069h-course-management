<?php
if(isset($_POST['submit'])) {
include "connection.php";

//get user input from GET / POST method
/*
echo "<pre>";
print_r($_POST);
var_export($_POST);
echo "</pre>";
*/

$data= $_POST;

$submit = $data['submit'];
$action = $_GET['action'];
$id = $_GET['examid'];
$course_id_for_url = $_GET['course_id'];
 //echo $course_id_for_url ."sdafasdf";
$name = $data['name'];
$description = $data['description'];
$full_marks = $data['full_marks'];
$pass_marks = $data['pass_marks'];
$start_time = $data['start_time'];
$end_time = $data['end_time'];
$date = $data['date'];
$course_id = $data['course'];
$created_at = time();

//server side validation of input data
if(trim($name) == ''){
	$hasError = true;
	$name_error = "Please Specify the Exam Name";
}
else{
	$name = stripslashes(trim($name));
}
if(trim($_POST['description']) == '') {
		$hasError = true;
		$description_error = "Please specify description";
	} else {
			$description = stripslashes(trim($_POST['description']));
	}
if(trim($full_marks) == ''){
	$hasError = true;
	$full_marks_error = "Please Specify the Full Marks";
}
else{
	$full_marks = stripslashes(trim($full_marks));
}
if(trim($pass_marks) == ''){
	$hasError = true;
	$pass_marks_error = "Please Specify the Pass Marks";
}
else{
	$pass_marks = stripslashes(trim($pass_marks));
}
if(trim($start_time) == ''){
	$hasError = true;
	$start_time = "Please Specify the Start Time";
}
else{
	$start_time = stripslashes(trim($start_time));
}
if(trim($end_time) == ''){
	$hasError = true;
	$end_time_error = "Please Specify the End TIme";
}
else{
	$end_time = stripslashes(trim($end_time));
}
if(trim($date) == ''){
	$hasError = true;
	$date_error = "Please Specify the Exam Date";
}
else{
	$date = stripslashes(trim($date));
}

if(!$hasError == true){
if($action=="delete"){
	$sql ="delete from `exam` where id=$id";
}
else if($action=="update"){
 $sql = "UPDATE `exam` SET `name` = \"$name\", `description` = \"$description\", `full_marks` = \"$full_marks\", `pass_marks` = \"pass_marks\", `start_time` = \"$start_time\",
	  `end_time` = \"$end_time\", `date` = \"$date\", `created_at` = \"$created_at\", `course_id` = \"$course_id\" WHERE `exam`.`id` = $id  LIMIT 1;";

}
else{
//build query
 $sql = "INSERT INTO `exam` (`id`, `name`, `description`, `full_marks`, `pass_marks`, `start_time`, `end_time`, `date`, `course_id`, `created_at`) 
			        VALUES (NULL, \"$name\", \"$description\", $full_marks, $pass_marks, $start_time, $end_time, $date,$course_id, $created_at);";
}
mysql_query	($sql);				

header ("Location: exam.php?id=$course_id_for_url");
}		
}		
?>