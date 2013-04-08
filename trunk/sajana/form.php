
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

      <h1>Bootstrap starter template</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

		 		
		<?php
		
		$users = array(array("1","john","ktm","98123344"),
					  array("2","jazz","ktm","98123344"),
					  array("3","hyaan","ktm","98123344")
					  );
					  
					 
					  
		$people=$_GET;
					
				/*	echo "<pre>";	
					  //print_r($users);
					   print_r($_SERVER);
					   print_r($_GETS);
					  echo "</pre>";*/
		?>
		
	  <table class="table table-bordered">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Address</th>
				  <th>Phone</th>
				  <th>Action</th>
				  </tr>
				</thead>
			                
            
              <tbody>
				
				
						<tr>		
							<td><?php echo $people["sn"];?></td>
							<td><?php echo $people["name"];?>	</td>
							<td><?php echo $people["address"];?>	</td>
							<td><?php echo $people["phone"];?>	</td>
							<td>Add/Edit</td>
						</tr>
							
				
			
		
              </tbody>
            </table>
	<form action = "" method = "POST">	
			<h2>User Information</h2>	
			<b>SN:</b> &nbsp; &nbsp; &nbsp;   <input name="sn" type="text" value="1" /><br>
			<b>Name:</b> &nbsp; &nbsp; &nbsp;   <input name="name" type="text" value="Name" /><br>
			<b>Address:</b>&nbsp; 	<input name="address" type="text" value="Address" /><br>
			<b>Phone:</b>  &nbsp; &nbsp;  <input name="phone" type="text" value="Phone" /><br>	
			
			
			<input type = "submit" value= "Add User">
			<button>Reset</button></br>
			
			<input name="value1" type= "text">	
			<select name = "select" >
			  <option value="add">+</option>
			  <option value="sub">-</option>
			  <option value="mul">*</option>
			  <option value="div">/</option>
			</select>
			<input name="value2" type= "text">	
			<input type = "submit" value= "Calculate" >
			<!--<button>Calculate</button>-->
			<?php 
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			
			$v1= $_POST["value1"];
			$v2= $_POST["value2"];
			$v3= $_POST["select"];
			
			
			
			if($v3 == "add") {
				$v4=$v1 + $v2;
			}
			else if($v3 == "sub") {
				$v4=$v1 - $v2;
			}
			else if($v3 == "mul") {
				$v4=$v1 * $v2;
			}
			else {
				$v4=$v1 / $v2;
			}
			
			echo $v4 ." _ ".$v3; ?><br>

			
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
