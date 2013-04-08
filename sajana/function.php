
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
					  
					 
					  
		$people=array(array("sn"=>"1", "Name"=>"ram", "Address"=>"ktm","Action"=>"Add/Edit"),
				array("sn"=>"1", "Name"=>"ram", "Address"=>"ktm","Action"=>"Add/Edit"),
				array("sn"=>"1", "Name"=>"ram", "Address"=>"ktm","Action"=>"Add/Edit")
					);	
					echo "<pre>";	
					  //print_r($users);
					//   print_r($people);
					  echo "</pre>";
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
			  <?php
				$i= 0;  
				$j= 0;  

				while ($i <= 2 ) { 
					echo "<tr>";  
					while ($j <= 3){ 
						
								echo "<td>".$users[$i][$j]."</td>";  
								if ($j==3) {
								?>
									<td> <a href="#">Add</a>/ <a href="#">Edit</a> </td>
								<?php
								
								}
								$j++;
					}
					echo "</tr>"; 					
				$j=0;				
				$i++;				
					} 
					echo time()."<br/>";
					
					$thisday = date("jS F Y l",1);
					$thistime = date("h:i:s A",1);
				echo $thisday."<br/>".$thistime."<br/>";
				echo strlen("sa jana");
				echo"<br/>".str_word_count("sajana mah rjan");
				echo"</br>".substr("hello world",1);
				echo"</br>".substr("hello world",0,5);
				echo"</br>".substr("hello world",-6);
				echo"</br>".substr("apple.jpg",-3);
				echo"</br>".ucfirst("kamal");
				echo"</br>".ucwords("semicolon developers");
				echo"</br>".sha1("password");
				echo"</br>".md5("password");
				echo "</br>". number_format(5/3,10);
				echo "</br>". strcmp("hello","hello")."<br/>";
				
				echo  mktime(4, 26, 0, 1, 8, 2013)."<br/>";

$str = "fds \fdsfs '@ fdsggdfs'stat";

echo addslashes($str)."<br/>";
echo stripslashes($str)."<br/>";

echo sum(10,20)."<br/>";
$marks = array(20,30,40,50,60);
echo avg($marks)."<br/>";

function sum($n1,$n2){
	return $n1 + $n2; 
}

function avg($marks){
	
	return array_sum($marks)/count($marks);

}

				
	?>  
              </tbody>
            </table>
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
