
<!DOCTYPE html>
<html lang="en">
  <head>
 	<?php $this->load->view('admin/meta');?> 
  </head>

  <body>
    <?php $this->load->view('admin/nav');?>	  

    <div class="container">
	<h1>Edit Exam </h1>
      <p>From here you can Edit exam of Online Examination System.</p>
	  <br/>      <br/>
	      
	  <form class="form-horizontal" action = "<?php echo site_url('admin/exams/add');?>" method = "POST" enctype="multipart/form-data">
	  <div class="control-group">
		<label class="control-label" for="name">Exam Name </label>
		<div class="controls">
		  <input type="text" id="name" name="name"  value="<?php echo set_value('name');?>">
		  <span class="help-inline"><?php echo form_error('name'); ?></span>
		</div>
	  </div>
	 
	  <div class="control-group ">
		<label class="control-label" for="description">Exam Description</label>
		<div class="controls">
		 <textarea rows="3" id="description" name="description"><?php echo set_value('description');?></textarea>
		 <span class="help-inline"><?php echo form_error('description'); ?></span>
		</div>
	  </div>
  
  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="full_marks">Full Mark</label>
		<div class="controls">
		  <input type="text" id="full_marks" name="full_marks"  value="<?php  echo set_value('full_marks'); ?>">
		  <span class="help-inline"><?php echo form_error('full_marks'); ?></span>
		</div>
	  </div>
	  
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="pass_marks">Pass Mark</label>
		<div class="controls">
		  <input type="text" id="pass_marks" name="pass_marks"  value="<?php echo  set_value('pass_marks'); ?>">
		  <span class="help-inline"><?php echo form_error('pass_marks'); ?></span>
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="start_time">Start Time</label>
		<div class="controls">
		  <input type="text" id="start_time" name="start_time"  value="<?php  echo set_value('start_time'); ?>">
		  <span class="help-inline"><?php echo form_error('start_time'); ?></span>
		</div>
	  </div>
	  
	 <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="end_time">End Time</label>
		<div class="controls">
		  <input type="text" id="end_time" name="end_time"  value="<?php echo  set_value('end_time'); ?>">
		  <span class="help-inline"><?php echo form_error('end_time'); ?></span>
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="date">Exam Date</label>
		<div class="controls">
		  <input type="text" id="date" name="date"  value="<?php echo  set_value('date'); ?>">
			<span class="help-inline"><?php echo form_error('date'); ?></span>
		</div>
	  </div>
	  
	  <div class="control-group <?php if (isset($name_error)) echo "error"; ?>">
		<label class="control-label" for="course_id">Course Name</label>
		<div class="controls">
		  <select id="course_id" name="course_id"  value="<?php echo set_value('course_id'); ?>">
		  
		  <option value="0" selected="selected" >-Select Course-</option><br>
			  <option value="42">java</option><br>
    	  </select>
    	  <span class="help-inline"><?php echo form_error('course_id'); ?></span>
		</div>
	  </div>
	  
	  <div class="control-group">
		<div class="controls">
		  <input type="submit" class="btn btn-success" name="submit" value="Add Exam">
		  <button class="btn btn-success" onclick="exam.php" >Cancel</button>
		</div>
	  </div>
	</form>

    </div> <!-- /container -->
<?php $this->load->view('admin/footer');?>
  </body>
</html>
