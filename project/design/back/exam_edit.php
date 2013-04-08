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
	?>	  

    <div class="container">
		<?php 	    
					include "actions/connection.php";
					$courseid = $_GET['id'];
					$examid = $_GET['examid'];					
					$sql = "select id, name from courses where id = $courseid";											
					$course = mysql_query($sql);
					$courseres = mysql_fetch_assoc($course);
					$sql = "select * from exam where id = $examid";											
					$exam = mysql_query($sql);
					$examres = mysql_fetch_assoc($exam);
									
			?>
	<h1>Edit Exam for course <?php echo $courseres['name'];?></h1>
      
	  <br/>      <br/>

		      
	  <form class="form-horizontal" action = "actions/exam_add.php?examid=<?php echo $examres['id'];?>&course_id=<?php echo $courseres['id'];?>&action=update" method = "POST">
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="name">Exam Name </label>
		<div class="controls">
		  <input type="text" id="name" name="name"  value="<?php if (isset($name)) echo $name; else echo $examres['name'];?>">
		</div>
	  </div>
	 
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="description">Exam Description</label>
		<div class="controls">
		 <textarea rows="3" id="description" name="description" value="<?php if (isset($name)) echo $name; else echo $examres['description'];?>"><?php echo $examres['description'];?>s</textarea>
		</div>
	  </div>
  
  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="full_marks">Full Mark</label>
		<div class="controls">
		  <input type="text" id="full_marks" name="full_marks"value="<?php if (isset($name)) echo $name; else echo $examres['full_marks'];?>" placeholder="">
		</div>
	  </div>
	  
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="pass_marks">Pass Mark</label>
		<div class="controls">
		  <input type="text" id="pass_marks" name="pass_marks" value="<?php if (isset($name)) echo $name; else echo $examres['pass_marks'];?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?> ">
		<label class="control-label" for="start_time">Start Time</label>
		<div class="controls">
		  <input type="text" id="start_time" name="start_time" value="<?php if (isset($name)) echo $name; else echo $examres['start_time'];?>" placeholder="">
		</div>
	  </div>
	  
	 <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="end_time">End Time</label>
		<div class="controls">
		  <input type="text" id="end_time" name="end_time" value="<?php if (isset($name)) echo $name; else echo $examres['end_time'];?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="date">Exam Date</label>
		<div class="controls">
		  <input type="text" id="date" name="date" value="<?php if (isset($name)) echo $name; else echo $examres['date'];?>" placeholder="">
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="course">Course Name</label>
		<div class="controls">
		  <select id="course" name="course" value="<?php if (isset($name)) echo $name;?>">
		     <option value="<?php echo $courseres['id']; ?>"><?php  echo $courseres['name']; ?></option><br>                   
		  </select>
		</div>
	  </div>
	  
	  <div class="control-group">
		<div class="controls">
		  <input type="submit" class="btn btn-success" name="submit" value="update Exam">
		  <button class="btn btn-success" onclick="exam.php" >Cancel</button>
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
