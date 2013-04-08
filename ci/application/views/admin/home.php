<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
	

    <div class="container">
	</br>
      <h1>Welcome to Online Examination System</h1>
		
		<form id='login' action='login.php' method='post'>
		<fieldset >
		<h2>Login</h2>
			 
		<label for='username' >UserName*:</label>
		<input type='text' name='username' id='username'  />
		 
		<label for='password' >Password*:</label>
		<input type='password' name='password' id='password'/>
		<br/> 
		<input type='submit' class="btn btn-success" name='Submit' value='Submit' />
		 
		</fieldset>
		</form>		
		
    </div> <!-- /container -->
	
	
<?php $this->load->view('admin/nav'); ?>
    

  </body>
</html>
