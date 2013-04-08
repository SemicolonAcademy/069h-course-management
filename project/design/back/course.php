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
	
	
	<script src="assets/js/jquery.js"></script>
	
	
	
	
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

      <h1>Manage Course</h1>
      <p>From here you can manage courses of Online Examination System.</p>
	  <br/>	  
	  <h3 class="pull-left">Courses <span style="font-size:14px;">(<a href="course_add.php"> Add Course </a>)</span></h3>
	    
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
				  <th>Description</th>
                </tr>
              </thead>
              
               <tbody>
			   
				
				<?php
					include "actions/connection.php";				
					
					$sql = "select * from courses";							
				
					$result = mysql_query($sql);				

					while(($row = mysql_fetch_assoc($result))!=0)
						{
							$count++;				
				
				
				?>
				
				<tr>
                  <td><?php echo $count;?></td>
                  <td><?php echo $row['name'];?></td>
				  <td><?php echo $row['description'];?></td>
				  <td><a href="exam.php?id=<?php echo $row['id'];?>">View Exams</a> | <a class="lightbox" href="course_edit.php?id=<?php echo $row['id'];?>">Edit</a> |  <a onclick="return confirm('Are you sure you want to delete?')"  href="actions/course_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                </tr>
				
				<?php } ?>                    
			    </tbody>
                
              </table>
	  
	      <div class="pagination">
    <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
    </ul>
    </div>
	  	  

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
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
