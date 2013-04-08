
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
		  
        </div>
      </div>
    </div>
	

    <div class="container">
	
	<form action = "u_process.php" method = "POST">	

			<?php
			
				$con = mysql_connect('localhost', 'root', '');
				if (!$con) {
					die('Could not connect: ' . mysql_error());
					
				} 
				else{
				
				mysql_select_db("utrack", $con);
				
				echo "<strong>University</strong>";
				$result = mysql_query("SELECT  UniversityID ,UniversityName FROM university");
				 echo "<select name = \"university\" >";
				 echo "<option></option>";
				while($row = mysql_fetch_array($result))
				  {
					echo "<option value=\"".$row['UniversityID']."\">".$row['UniversityName']."</option>\n  ";
				  
					echo $row['UniversityID'] . " " . $row['UniversityURL'];
					echo "<br />";
				  }
				  echo "</select>";
				  
				 /*echo "<strong>Degree</strong>"; 
				$degree = mysql_query("SELECT  DegreeName FROM degree");
				 echo "<select name = \"degree\" >";
				 echo "<option></option>";
				while($row = mysql_fetch_array($degree))
				  {
				  echo "<option value=\"".$row['DegreeName']."\">".$row['DegreeName']."</option>\n  ";
				  
				  echo "<br />";
				  }
				  echo "</select>"; */
				  
				
				 echo "<strong>Subject</strong>"; 
				$sub = mysql_query("SELECT  SubjectId , SubjectName FROM subject");
				 echo "<select name = \"subject\" >";
				 echo "<option></option>";
				while($row = mysql_fetch_array($sub))
				  {
				  echo "<option value=\"".$row['SubjectId']."\">".$row['SubjectName']."</option>\n  ";
				  
				  echo "<br />";
				  }
				  echo "</select>";  
				
				echo "<strong>Campus</strong>"; 
				$campus = mysql_query("SELECT  CampusID, CampusName FROM campus");
				 echo "<select name = \"campus\" >";
				 echo "<option></option>";
				while($row = mysql_fetch_array($campus))
				  {
				  echo "<option value=\"".$row['CampusID']."\">".$row['CampusName']."</option>\n  ";
				  
				  echo "<br />";
				  }
				  echo "</select>"; 
			}		
			
				
			?>
				
						
			<input type = "submit" value= "Search" >
			<!--<button>Calculate</button>-->
			
			
						
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
