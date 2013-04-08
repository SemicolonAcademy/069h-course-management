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
  
  
  
  <script language="javascript" type="text/javascript">
	
	function validate(form) {				
			
	var error = "";
	
	var username = form.username;
	var password = form.password;
	var email = form.email;
	
	
	//validate username
	
	var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (username.value == "") {        
        error += "Username Required ! \n";
    } else if ((username.value.length < 5) || (username.value.length > 15)) {        
        error += "The username must be 5-15 characters long.\n";
    } else if (illegalChars.test(username.value)) {        
        error += "The username contains illegal characters.\n";
    } 
	
	//validate password
	if (password.value == "") {        
        error += "Password Required ! \n";
    } 
	
	//validate email
    
    email = email.value.replace(/^\s+|\s+$/, '');  // trim email value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ; // regular expression for email validation
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ; //disallowed characters in email
    
    if (email.value == "") {        
        error += "You didn't enter an email address.\n";
    } else if (!emailFilter.test(email)) {              //test email for illegal characters        
        error += "Please enter a valid email address.\n";
    } else if (email.value.match(illegalChars)) {        
        error += "The email address contains illegal characters.\n";
    }     
	
	/*
	error += validateUsername(theForm.username);
	error += validatePassword(theForm.pwd);
	error += validateEmail(theForm.email);
	error += validatePhone(theForm.phone);
	error += validateEmpty(theForm.from);
	*/
	
	if (error != "") {
		alert("Some fields need correction:\n" + error);
		return false;
	}

  return true;
  
	
			
		}
		
</script>
  </head>

  <body>

    <?php
			   include "nav.php";
?>
        

    <div class="container">

	<h1>Add Users</h1>
      <p>From here you can add users of Online Examination System.</p>
	  
	  
	  <br/>  <br/>      
	  <form class="form-horizontal" action="actions/users.php" method="POST" onsubmit="return validate(this);">
  <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email"  name="email" placeholder="">
    </div>
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="usertype">User Type</label>
    <div class="controls">
      <select name="usertype">
              <option value="1">Admin</option>
			  <option value="2">Teacher</option>
              <option value="3" selected="selected">Student</option>              
       <select>
    </div>
  </div> 
			
  
  <div class="control-group">
    <label class="control-label" for="firstname">First Name</label>
    <div class="controls">
      <input type="text" id="firstname" name="firstname" placeholder="">
    </div>
  </div>
  
    <div class="control-group">
    <label class="control-label" for="midname">Middle Name</label>
    <div class="controls">
      <input type="text" id="midname" name="midname" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="lastname">Last Name</label>
    <div class="controls">
      <input type="text" id="lastname" name="lastname" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="phone">Phone</label>
    <div class="controls">
      <input type="text" id="phone" name="phone" placeholder="">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="address">Address</label>
    <div class="controls">
      <input type="text" id="address" name="address" placeholder="">
    </div>
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="website">Website</label>
    <div class="controls">
      <input type="text" id="website" name="website" placeholder="">
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-success" name="submit" value="Add User">
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
	
    <script src="assets/js/jqBootstrapValidation.js"></script>
	
	
  </body>
</html>
