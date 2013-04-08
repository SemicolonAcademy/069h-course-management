<script type="text/javascript">
    jsFunction();
</script>
<?php
include "connection.php";
$data=$_POST;
$submit = $data['submit'];
$examid = $_GET['examid'];
$action = $_GET['action'];
$quid = $_GET['quid'];

$question = $data['question'];
$question_type = $data['question_type'];
$marks = $data['marks'];
$remark = $data['remark'];
if($question=="")
{
echo "please enter";
include("../question.php?examid=$examid");

//set user's input in the form's fields. How to access
//form's field form here ?
}
if(){
echo "I don't exist until foo() is called.\n";

}
if($action == "update"){

}
else if($action == "delete"){
  $sql = "DELETE from questions where id = $quid";
}
else{

 $sql = "INSERT INTO `questions` (`id`, `question`,`exam_id` , `questiontype_id`, `marks`, `remark`) VALUES (NULL, \"$question\", $examid,\"$question_type\", \"$marks\", \"$remark\");";
}	
	mysql_query($sql);
	
	header("location: ../question.php?examid=$examid");
						
			
?>