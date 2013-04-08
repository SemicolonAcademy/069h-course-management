<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
    
    <div class="container">

	<h1>Add Users</h1>
      <p>From here you can add users of Online Examination System.</p>
	  
	  
	  <br/>  <br/>
	  
	  <?php echo validation_errors(); ?>
	  
	        
	  <form class="form-horizontal" action="<?php echo site_url('admin/users/create');?>" method="POST" enctype="multipart/form-data" >
  <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username"  value="<?php echo set_value('username'); ?>" >
	 </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password"  value="" ></div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">Email</label>
    <div class="controls">
      <input type="text" id="email"  name="email"  value="<?php echo set_value('email'); ?>" >
	</div>
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="usertype">User Type</label>
    <div class="controls">
      <select name="usertype"  value="" >
              <option value="1">Admin</option>
			  <option value="2">Teacher</option>
              <option value="3" selected="selected">Student</option>              
       <select>
      </div>
  </div> 
			
  
  <div class="control-group">
    <label class="control-label" for="firstname">First Name</label>
    <div class="controls">
      <input type="text" id="firstname" name="firstname"  value="" >
	  </div>
  </div>
  
    <div class="control-group">
    <label class="control-label" for="midname">Middle Name</label>
    <div class="controls">
      <input type="text" id="midname" name="midname"  value="">
    </div>
  </div>
  
  <div class="control-group ">
    <label class="control-label" for="lastname">Last Name</label>
    <div class="controls">
      <input type="text" id="lastname" name="lastname"  value="" >
	  </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="phone">Phone</label>
    <div class="controls">
      <input type="text" id="phone" name="phone"  value="" >
	    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="address">Address</label>
    <div class="controls">
      <input type="text" id="address" name="address" value=""  >
	    </div>
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="website">Website</label>
    <div class="controls">
      <input type="text" id="website" name="website" value="" >
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="website">Profile Picture</label>
    <div class="controls">
      <input type="file" id="picture" name="picture" value="" >
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">
      <input type="submit" class="btn btn-success" name="submit" value="Add User">
    </div>
  </div>
</form>

   <?php $this->load->view('admin/nav'); ?>
	
  </body>
</html>
