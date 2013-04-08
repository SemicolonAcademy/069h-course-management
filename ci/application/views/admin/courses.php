<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<?php $this->load->view('admin/meta'); ?>
  </head>

  <body>

	<?php $this->load->view('admin/nav'); ?>
	

    <div class="container">

      <h1>Manage Courses</h1>
		<p>From here you can manage Courses of Online Examination System.</p>
	  <br/>	  
	  <h3 class="pull-left">Recent Courses <span style="font-size:14px;">(<a href="<?php echo site_url("admin/courses/create/"); ?>"> Add Courses </a>)</span></h3>
	  	  
		
	 <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
				  <th>Description</th>
				  <th>Actions</th>
                </tr>
              </thead>
              
               <tbody>
                <?php
				$count = 0;
                foreach ($courses as $course) { 
                 $count++;
                ?>
				<tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $course->name; ?></td>
                  <td><?php echo $course->description; ?></td>
				  <td><a href="#">View Exams</a> | <a href="<?php echo site_url("admin/courses/update/".$course->id); ?>"> <?php echo $course->id;?>Edit</a> |  <a href="<?php echo site_url("admin/courses/delete/".$course->id); ?>">Delete</a></td>  
				  				  
                </tr>
                <?php } ?>				
              </tbody>
                
              </table>  	  

	      </div> <!-- /container -->
	
	
<?php $this->load->view('admin/nav'); ?>
    

  </body>
</html>
