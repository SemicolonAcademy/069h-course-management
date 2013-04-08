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
$action = $_GET['action'];
$submit = $data['submit'];

$username = $data['username'];
$password = $data['password'];
$email = $data['email'];
$usertype = $data['usertype'];
$firstname = $data['firstname'];
$midname = $data['midname'];
$lastname = $data['lastname'];
$phone = $data['phone'];
$address = $data['address'];
$website = $data['website'];
$created_at = time();
//If the form is submitted


	//Check to make sure that the name field is not empty
	if(trim($_POST['username']) == '') {
		$hasError = true;
		$username_error = "Please specify the Username";
	} else {
		$username = trim($_POST['username']);
	}

	//Check to make sure that the password field is not empty
	if(trim($_POST['password']) == '') {
		$hasError = true;
		$password_error = "Please specify password";
	} else {
		$password = trim($_POST['password']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
		$email_error = "Please specify email address";
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
		$email_error = "Please specify correct email address";
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure usertype were entered
	if(trim($_POST['usertype']) == '') {
		$hasError = true;
		$usertype_error = "Please specify usertype";
	} else {
			$usertype = stripslashes(trim($_POST['usertype']));
	}
	//check if firstname name entered
	if(trim($_POST['firstname']) == '') {
		$hasError = true;
		$firstname_error = "Please specify firstname";
	} else {
			$firstname = stripslashes(trim($_POST['firstname']));
	}
	//check if lastname name entered
	if(trim($_POST['lastname']) == '') {
		$hasError = true;
		$lastname_error = "Please specify lastname";
	} else {
			$lastname = stripslashes(trim($_POST['lastname']));
	}
	//check if phone entered
	if(trim($_POST['phone']) == '') {
		$hasError = true;
		$phone_error = "Please specify phone no.";
	} else {
			$phone = stripslashes(trim($_POST['phone']));
	}
	//check if address entered
	
	if(trim($_POST['address']) == '') {
		$hasError = true;
		$address_error = "Please specify address";
//echo "fgdfng".$address_error;
	} else {
			$address = stripslashes(trim($_POST['address']));
	}
	
	if (!$hasError && isset($_FILES)) {
	
		$upload_dir = './uploads';
	
		//tmp_name holds temporary file for uploaded file
		$source_file = $_FILES['picture']['tmp_name'];
	
		//the 'name' key of the array holds original filename
		//we can use original file name here as our destination filename. it will be saved inside our upload directory
		$destination_file = time()."_".$_FILES['picture']['name'];
		
		
		$ext = substr($_FILES['picture']['name'], -3);
		
		
		if (in_array($ext, array("jpg","gif","bmp","png") )){
		
			if (move_uploaded_file($source_file, $upload_dir."/".$destination_file)){
				//file upload done;
			}else {
				$hasError = true;
				$file_error = "Couldn't upload file. Retry later";
			}
		
		}else {
				$hasError = true;
				$file_error = "Only images are allowed";
		
		}	
	
	}
		
	/*
	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'youremail@yoursite.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	} */
	

if($hasError != true){
if ($action=="update") {

$id = $data['userid'];
$password = md5($password);

//server side validation of input data
//build query
 $sql = "update `users` set `username` = \"$username\", `password` = \"$password\", `email` = \"$email\", `first_name`= \"$firstname\", `mid_name` = \"$midname\", `last_name` =\"$lastname\", `phone` = \"$phone\", `address` = \"$address\", `website` = \"$website\", `picture` = \"$destination_file\", `created_at` =$created_at , `user_type`= $usertype where `id` = $id ;";
} else { // insert date	
	
$password = md5($password);
//build query
$sql = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `picture`, `created_at`, `user_type`) VALUES (NULL, \"$username\", \"$password\", \"$email\", \"$firstname\", \"$midname\", \"$lastname\", \"$phone\", \"$address\", \"$website\", \"$destination_file\", $created_at, $usertype);";

}
mysql_query	($sql);	
		
header ("location: users.php");

}			

}
			
?>
