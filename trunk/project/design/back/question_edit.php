<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Examination System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

   <?php
			   include "nav.php";
			   include "actions/connection.php";
			   $examid= $_GET['examid'];
			   $sql = "SELECT * from exam where id = $examid";
			   $exam = mysql_query($sql);
			   $examres = mysql_fetch_assoc($exam);
			   $sql="select * from question_type ";
			   $result=mysql_query($sql);
			   
			   $qid= $_GET['qid'];
			   $sql = "SELECT * from questions where id = $qid";
			   $ques = mysql_query($sql);
			   $question = mysql_fetch_assoc($ques);			   
			   
  ?>         

    <div class="container">

      <h1>Update Question to Exam of <u> <?php echo $examres['name'];?></u></h1>
      </br></br>
	  
	  <form class="form-horizontal" action="actions/question_add.php?examid=<?php echo $examres['id']?>&action=update" method="POST">
  <div class="control-group">
    <label class="control-label" for="question">Question</label>
    <div class="controls">
      <input type="text" id="question" name="question"  value = "<?php echo $question['question']; ?>" placeholder="">
    </div>
  </div>
 
  <div class="control-group">
    <label class="control-label" for="question_type">Question Type</label>
    <div class="controls">
      <select id="question_type" name="question_type">
		<?php 
		   $sql = "select question_type.name from question_type
					inner join questions on questions.questiontype_id = question_type.id
					 where questions.id = $qid ";											
					$qtype = mysql_query($sql);
					$qtyperes  = mysql_fetch_assoc($qtype );										  
					 ?>
						  
	  <option value="<?php echo $qtyperes['id']; ?>"><?php echo $qtyperes['name']; ?></option>
	  <?php while($qtype = mysql_fetch_assoc($result)){?>
	  <option value ="<?php echo $qtype['id']?>"><?php echo $qtype['name'] ?></option>
	  <?php } ?>
	  </select>
	  
    </div> 
  </div>
 
  <div class="control-group">
    <label class="control-label" for="marks">Mark Carried</label>
    <div class="controls">
      <input type="text" id="marks" name="marks" value = "<?php echo $question['marks']; ?>" placeholder="">
    </div>
  </div>
  
<div class="control-group">
    <label class="control-label" for="remark">Remark</label>
    <div class="controls">
     <textarea rows="3" id="remark" name="remark" value = "<?php echo $question['remark']; ?>"><?php echo $question['remark']; ?></textarea> 
    </div>
  </div>  
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-success" name="submit" value="update Question">
	  <button class="btn btn-success" onclick="question.php" >Cancel</button>
    </div>
  </div>
</form>
	 
	  
	  	  

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
