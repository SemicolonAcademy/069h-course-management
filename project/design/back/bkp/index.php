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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">Online Examination System</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
      	      <li><a href="users.php">Users</a></li>      
			  <li><a href="course.php">Courses</a></li>			    
			  <li><a href="exam.php">Exams</a></li>
			  <li><a href="question.php">Questions</a></li>
			  <li><a href="answer.php">Answers</a></li>

             </ul>
			<form class="navbar-form pull-right">
  <input type="text" class="span2">
  <button type="submit" class="btn">Submit</button>
</form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Welcome, Admin</h1>
      <p>From the administration section you can manage all aspects of Online Examination System.</p>
	  <br/>	  
	  <h3 class="pull-left">Recent Users <span style="font-size:14px;">(<a href="users.php"> View all </a> | <a href="users_add.php"> Add Users </a>)</span></h3>
	    
	  
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
				  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
				  <th>Created on</th>
				  <th>Actions</th>
                </tr>
              </thead>
              
               <tbody>
                <tr>
                  <td>1</td>
                  <td>Ram lal Maherjan</td>
				  <td>ram@yahoo.com</td>
                  <td>9841556644</td>
                  <td>Newroad,kathmandu</td>
				  <td>25 jan, 2012</td>
				  <td><a href="#">Edit</a> | <a href="#">Delete</a> | <a href="#">Activate</a> </td>
                </tr>
                
                <tr>
                  <td>2</td>
                  <td>Ram lal Maherjan</td>
				  <td>ram@yahoo.com</td>
                  <td>9841556644</td>
                  <td>Newroad,kathmandu</td>
				  <td>25 jan, 2012</td>
				  <td><a href="#">Edit</a> | <a href="#">Delete</a> | <a href="#">Activate</a> </td>
                </tr>
                
                <tr>
                  <td>3</td>
                  <td>Ram lal Maherjan</td>
				  <td>ram@yahoo.com</td>
                  <td>9841556644</td>
                  <td>Newroad,kathmandu</td>
				  <td>25 jan, 2012</td>
				  <td><a href="#">Edit</a> | <a href="#">Delete</a> | <a href="#">Activate</a> </td>
                </tr>
                
                <tr>
                  <td>4</td>
                  <td>Ram lal Maherjan</td>
				  <td>ram@yahoo.com</td>
                  <td>9841556644</td>
                  <td>Newroad,kathmandu</td>
				  <td>25 jan, 2012</td>
				  <td><a href="#">Edit</a> | <a href="#">Delete</a> | <a href="#">Activate</a> </td>
                </tr>
                </tbody>
                
              </table>
	  
	  
	  <div class="row">
        <div class="span4">
          <h4>Manage Exams</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details</a></p>
        </div>
        <div class="span4">
          <h4>Manage Courses</h4>
          <p>Donec id  elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details</a></p>
       </div>
        <div class="span4">
          <h4>Manage Questions</h4>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details </a></p>
        </div>
      </div>

	  

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
