<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php $this->load->view('admin/meta');?>
  </head>

  <body>
	<?php  $this->load->view('admin/nav'); ?>
    <div class="container">

      <h1>Add New Course</h1>
      <p>From here you can add courses of Online Examination System.</p>
	   
	  </br></br>
		<form class="form-horizontal" action="<?php echo site_url('admin/courses/update/'.$course['id']);?>" method="POST">
		  
		   <input type="hidden" id="courseid" name="courseid" placeholder="" value="<?php echo $course['id']; ?>">
		   
		  <div class="control-group <?php if(isset($coursename_error)) echo "error";?>">
			<label class="control-label" for="name">Course Name</label>
			<div class="controls">
			  <input type="text" id="name" name="name" placeholder="" value="<?php echo isset($coursename) ? $coursename : $course['name']; ?>">
				<span class="help-inline"><?php echo form_error('name'); ?></span>
			</div>
		  </div>
		   <div class="control-group <?php if(isset($description_error)) echo "error"?>">		
			<label class="control-label" for="description">Course Description</label>
			<div class="controls">
			 <textarea rows="3" id="description" name="description"><?php if(isset($description)) echo $description; else echo $course['description']; ?></textarea>
				<span class="help-inline"><?php echo form_error('description'); ?></span>
			</div>
		  </div>
		  <div class="control-group">
			<div class="controls">
			  <input type="submit" class="btn btn-success" name="submit" value="Update Course">
			</div>
		  </div>
		</form>
	
	  
	</div> <!-- /container -->
	<?php  $this->load->view('admin/footer'); ?>
  </body>
</html>
