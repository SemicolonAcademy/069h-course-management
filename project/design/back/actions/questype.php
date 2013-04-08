<?php
include "connection.php";
$data = $_POST;


$name = $data['name'];
$slug = $data['slug'];

$sql = "INSERT INTO `question_type` (`id`, `name`, `slug`) VALUES (NULL, \"$name\", \"$slug\");";
 

mysql_query($sql);

	header("location: ../question_type.php");
?>