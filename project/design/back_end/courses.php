<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Exam System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.lightbox-0.5.css" media="screen" />
	    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Online Examination System</h1>
    <p class="lead">ADD/UPDATE</p>
  </div>
</header>
 <?php

include "nav.php";

?>
  <div class="container">
  <table border="2" width="1200">
	<thead>
      <tr>
	<th width="300">Course Name</th>
	<th>Description</th>
	</tr>
	</thead>	           
	<tbody>
<?php
$count=0;
$con = mysql_connect('localhost', 'root', '');
				if (!$con) {
					die('Could not connect: ' . mysql_error());
					
				} 
				else
				{
				
				mysql_select_db("onlineexam", $con);
				$sel_course= $_POST["coursename"];
				$sel_desc = $_POST["description"];
				
				mysql_query	("INSERT INTO `onlineexam`.`courses` (`id`, `name`, `description`) VALUES (NULL, '$sel_course', '$sel_desc')");				
				$sql = "select * From courses";
				
							
				
		$result = mysql_query($sql);
				

			while(($row = mysql_fetch_array($result))!=0)
				  {
					
				  echo "<tr><td>";
					echo $row['name']."</td>";
					echo "<td>".$row['description']."</td>";
				 echo"</tr>";		
					$count++;
			}
			
			if($count == 0){
			echo "<tr><td colspan = \"2\" align=\"center\">";
				echo "no records available";
			echo"</td></tr>";
			}
			
			
			}
			?>
			</tbody>
			</table>
          <a href="./add_courses.php"><button type="button">ADD New Course</button></a>
  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        
       </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script type="assets/javascript" src="js/jquery.lightbox-0.5.js"></script>
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
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>
<script>
$(function() {
        $('#gallery a').lightBox();
    });
</script>


  </body>
</html>
