<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>
  <body>
   	<?php  $this->load->view('admin/nav'); ?>		   
		
    <div class="container">
      <h1>Add New Course</h1>
      <p>From here you can add courses of Online Examination System.</p>
	 	    
	  </br></br>
	  
	  <form class="form-horizontal" action="" method="POST">
		 
		 <div class="control-group">
			<label class="control-label" for="name">Course Name</label>
			<div class="controls">
			  <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>">
			 	<span class="help-inline"><?php echo form_error('name'); ?></span>
			</div>
		  </div>
		 
		  <div class="control-group">
			<label class="control-label" for="description">Course Description</label>
			<div class="controls">
			 <textarea class="ckeditor" rows="10" id="description" name="description" ><?php echo set_value('description'); ?></textarea>
			 <span class="help-inline"><?php echo form_error('description'); ?></span>			  
			</div>
		</div>
		  <div class="control-group">
			<div class="controls">
			  <input type="submit" class="btn btn-success" name="submit" value="Add Course">
			</div>
		  </div>
		</form>
	</div> <!-- /container -->
  <?php $this->load->view('admin/footer'); ?>
  </body>
</html>
