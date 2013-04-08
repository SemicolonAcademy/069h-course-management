<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Courses</title>
    
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
         <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>

         <?php

		include "nav.php";
		
		?>
				
  
  <header class="jumbotron subhead" id="overview">


  <div class="container">
      <form method="post" action="<?php echo "courses.php"?>">
      <input type="submit" value="ADDNext">
      <button type="button" onClick="edit_course();">Update</button>
      <button type="button" onClick="cancel_user();">Cancel</button>
      <button type="button" onClick="finish_user();">Finish</button>
	   
        <label>Course Name:</label><input rdtype="text" name="coursename" value="" />
        <br/>
         <label>Description:</label>
        <input type="text" name="description" value="" />
        <br/>
        
    </form>
</header>
	
 </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
