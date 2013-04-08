
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
					  
					 
					  
		$peoples=array(array("sn"=>"1", "name"=>"ram", "address"=>"ktm", "phone"=>"99999"),
				array("sn"=>"2", "name"=>"sita", "address"=>"ktm", "phone"=>"99999"),
				array("sn"=>"3", "name"=>"gita", "address"=>"ktm", "phone"=>"99999"),
				array("sn"=>"4", "name"=>"gitanath", "address"=>"ktm", "phone"=>"99999")
					);	
					/*echo "<pre>";	
					  //print_r($users);
					   //print_r($people);
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
				
				<?php	//$i= 0;  while ($i <= 2 ) { 
				foreach($peoples as $people){
				
				echo "<pre>";
				print_r($people);
				echo "</pre>";
				
				?>
							
						<tr>		
							<td><?php echo $people["sn"];?></td>
							<td><?php echo $people["name"];?>	</td>
							<td><?php echo $people["address"];?>	</td>
							<td><?php echo $people["phone"];?>	</td>
							<td>Add/Edit</td>
						</tr>
							
				<?php	
				}
				//$i++; }	
				?>  
				<?php
foreach (array(1, 2, 3, 4) as $value) {
    echo "<pre>";
				print_r($value);
				echo "</pre>";
	$value = $value * 2;
	echo $value;
}
echo $value;
?>
	<?php
		$colors = array("red","green","blue");
		foreach($colors as $color){
			echo "The color you entered is ". $color;
			
		}
		
		$marks = array(50,60,70,80);
		$sum = 0;
		$avg = 0;
		$percent = 0;
		$total = 600;
		
		foreach($marks as $m){
			$sum = $sum + $m;			
		}
		$num = count($marks);
		$avg = $sum/$num;
		$percent = ($sum/$total)*100;
		
		
		echo "<br>The sum is ". $sum ."<br>"."The average marks is".$avg."<br>"."the percentage is ".$percent;
	?>				
              </tbody>
            </table>
	<form action="">	
			<h2>User Information</h2>	
			<b>Name:</b> &nbsp; &nbsp; &nbsp;   <input name="name" type="text" value="Name" /><br>
			<b>Address:</b>&nbsp; 	<input name="Address" type="text" value="Address" /><br>
			<b>Phone:</b>  &nbsp; &nbsp;  <input name="Phone" type="text" value="Phone" /><br>	
			
			<button>Add User</button>
			<button>Reset</button>
			
				
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
